<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    public function user()
    {
        return $this->hasOne(user::class);
    }
}
