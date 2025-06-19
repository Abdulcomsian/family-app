<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'date',
        'category',
        'rsvp_date',
        'assigned_event',
        'owner',
        'description',
        'invite_clique',
    ];

    public function members()
    {
        return $this->belongsToMany(Member::class, 'event_member');
    }
}
