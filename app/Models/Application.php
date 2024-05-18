<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function candidate()
    { //smal letter
        return $this->belongsTo(Candidate::class); //one to many
    }

    public function position()
    { //smal letter
        return $this->belongsTo(Position::class);
    }
}
