<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function threads()
    {
        return $this->belongsTo('App\Thread');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
