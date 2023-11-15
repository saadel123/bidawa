<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Mail\membermail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function index()
    {
        return view('admin.membres.index', ['membres' => Member::orderBy('created_at', 'desc')->get()]);
    }

    public function show($id)
    {
        return view('admin.membres.view', ['membre' => Member::where('id', $id)->first()]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'tele' => 'required',
            'civilite' => 'required',
            'adresse' => 'required',
            'quartier' => 'required',
            'cotisation' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $details = ['nom' => $request->nom,'prenom' => $request->prenom, 'email' => $request->email, 'tele' => $request->tele,'adresse' => $request->adresse,'cotisation' => $request->cotisation,];

        try {
            $membermail = new membermail($details);
            Mail::to('a.ezzyraouy@directinvest.ma')->send($membermail);
            $input = $request->all();
            $input['principaux'] = $request->principaux1 . ',' . $request->principaux2 . ',' . $request->principaux3;
            $input['suggestions'] = $request->suggestions1 . ',' . $request->suggestions2 . ',' . $request->suggestions3;
            $input['lesquelles'] = $request->lesquelles1 . ',' . $request->lesquelles2 . ',' . $request->lesquelles3;
            $member = new Member();
            $member->create($input);
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
        }
    }
}
