<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'url', 'type', 'evenement_id'
    ];
    public function article()
    {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }
}
