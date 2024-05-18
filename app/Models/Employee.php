<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function position(){
        return $this->belongsTo(Position::class);
    }
    public function notification(){
        return $this->belongsToMany(Notification::class, 'receivesnots');
    }
    public function requestt(){
        return $this->hasMany(Requestt::class);
    }

    public function manager(){
        return $this->belongsTo(Notification::class);
    }
    public function permission(){
        return $this->hasMany(Permission::class);
    }
    public function user(){
        return $this->belongTo(User::class);
    }
}
