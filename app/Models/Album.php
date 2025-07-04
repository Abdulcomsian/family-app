<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name'
    ];


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function getCoverAttribute()
    {
        return $this->photos->first();
    }
    public function coverPhoto()
    {
        return $this->hasOne(Photo::class);
    }
}
