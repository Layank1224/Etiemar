<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobanalysis extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
