<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'image_url'
    ];



    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
