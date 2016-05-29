<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function advert()
    {
        return $this->hasOne('App\Bulletin', 'id', 'advert_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function($issue){
            $original   = $issue->original;
            $attributes = $issue->attributes;

            if (isset($attributes['status']) && ($original['status'] == null && $attributes['status'] == 1)) {
                \DB::table('offers')
                    ->where(['advert_id' => $original['advert_id'], ['id', '<>', $original['id']]])
                    ->update(['status' => 2]);

                \DB::table('bulletins')
                    ->where('id', $original['advert_id'])
                    ->update(['is_active' => false]);
            }
        });
    }
}
