<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'slug', 'title', 'description', 'image', 'affiche', 'videos', 'date'
    ];
    public function media()
    {
        return $this->hasMany(media::class, 'evenement_id');
    }
}
