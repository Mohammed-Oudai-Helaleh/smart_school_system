<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function classrooms(){
        return $this->belongsToMany(Classroom::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
