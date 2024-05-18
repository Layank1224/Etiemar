<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function department()
    {
        return $this->belongsToMany(Department::class, 'containsdps');
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function jobanalysis()
    {
        return $this->hasMany(Jobanalysis::class);
    }
}
