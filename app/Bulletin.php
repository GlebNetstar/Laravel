<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer', 'advert_id', 'id');
    }

    public function isOwn()
    {
        return \Auth::user() && \Auth::user()->id == $this->user_id;
    }
}
