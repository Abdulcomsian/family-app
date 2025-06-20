<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'assign_task', 'description'];

    public function members()
    {
        return $this->belongsToMany(Member::class, 'task_member');
    }
}
