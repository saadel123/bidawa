<?php

namespace App\Http\Controllers;

use App\Mail\mailer;
use App\Models\Contact;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function SiteIndex()
    {
        return view('site.contact', ['evenement' => Evenement::select('title')->Where('date','>',now()->endOfDay())->get()]);
    }
    public function index()
    {
        return view('admin.contacts.index', ['contacts' => Contact::orderBy('created_at', 'desc')->get()]);
    }

    public function show($id)
    {
        return view('admin.contacts.view', ['contact' => Contact::where('id', $id)->first()]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'tele' => 'required',
            'message' => 'required',
            'choix' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $details = ['name' => $request->name, 'email' => $request->email, 'tele' => $request->tele, 'choix' => $request->choix, 'message' => $request->message,];

        try {
            $mailer = new mailer($details);
            Mail::to('a.ezzyraouy@directinvest.ma')->send($mailer);
            $input = $request->all();
            $mail = new Contact();
            $mail->create($input);
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
        }
    }
}
