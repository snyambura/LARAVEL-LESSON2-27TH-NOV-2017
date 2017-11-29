<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //
    public function blogs()
    {
        return $this->hasMany(User::class, 'id');
    }
}