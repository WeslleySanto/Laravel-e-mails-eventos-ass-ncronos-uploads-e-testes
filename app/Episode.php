<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $timestamps = false;
    protected $fillable = ['numero'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
