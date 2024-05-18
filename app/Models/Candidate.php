<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function application()
    { //smal letter
        return $this->hasmany(Application::class); //many applications to one candidate
    }

    public function cv()
    { //smal letter
        return $this->belongsTo(Cv::class); //one to one
    }
}
