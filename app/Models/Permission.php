<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function requestt()
    {
        return $this->belongsToMany(Requestt::class, 'requirespers');
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function employee()
    { //smal letter
        return $this->belongsTo(Employee::class); //
    }
}
