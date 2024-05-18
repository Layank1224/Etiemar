<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestt extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'requirespers'); //belongsto
    }
}
