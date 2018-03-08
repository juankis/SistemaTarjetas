<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    protected $fillable = ['id','name', 'path', 'created_at', 'updated_at'];

    public function publications()
    {
        return $this->hasMany('App\Pubication');
    }
}
