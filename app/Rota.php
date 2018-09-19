<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    protected $table = 'rotas';

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

    public function shifts()
    {
        return $this->hasMany('App\Shift');
    }
}
