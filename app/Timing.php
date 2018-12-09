<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timing extends Model
{
    protected $fillable = [
        'about','user_id','in_out','timing_type_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function timing_type()
    {
        return $this->belongsTo(TimingType::class);
    }


}
