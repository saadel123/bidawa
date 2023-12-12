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
        'slug_fr', 'title_fr', 'description_fr', 'lieu_fr', 'slug_ar', 'title_ar', 'description_ar', 'lieu_ar', 'image', 'affiche', 'videos', 'date'
    ];
    public function media()
    {
        return $this->hasMany(Media::class, 'evenement_id');
    }
}
