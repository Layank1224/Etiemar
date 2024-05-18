<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function permission()
    {
        return $this->hasMany(Permission::class);
    }
}
