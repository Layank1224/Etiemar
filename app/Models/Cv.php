<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function jobanalysis()
    { //smal letter
        return $this->hasmany(Jobanalysis::class); //many job analysis to one position
    }
}
