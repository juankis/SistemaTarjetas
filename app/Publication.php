<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';
    protected $fillable = ['id','description', 'card_id', 'sender_user_id', 'receptor_user_id'];

    public function card()
    {
    	return $this->belongsTo('App\Card');
    }
    public function sender()
    {
    	return $this->belongsTo('App\User');
    }
    public function receptor()
    {
    	return $this->belongsTo('App\User');
    }
}
