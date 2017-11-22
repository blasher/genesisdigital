<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = ['name', 'surname', 'email', 'phone', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
