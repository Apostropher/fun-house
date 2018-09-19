<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShiftBreak extends Model
{
    protected $table = 'shift_breaks';

    public function shift()
    {
        return $this->belongsTo('App\Shift');
    }
}
