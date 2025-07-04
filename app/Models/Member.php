<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'email'];



    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_member');
    }

    // public function tasks()
    // {
    //     return $this->belongsToMany(Task::class, 'task_member');
    // }
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_member', 'member_id', 'task_id');
    }
}
