<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = 'shifts';

    public function rota()
    {
        return $this->belongsTo('App\Rota');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staff');
    }

    public function shiftBreaks()
    {
        return $this->hasMany('App\ShiftBreak');
    }
}
