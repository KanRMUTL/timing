<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimingType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function timings()
    {
        return $this->hasMany(\App\Timing::class);
    }
}
