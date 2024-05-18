<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function position()
    { //smal letter
        return $this->belongsToMany(Position::class, 'containsdps'); //many to many
    }

    public function employee()
    { //smal letter
        return $this->hasMany(Employee::class);
    }
}
