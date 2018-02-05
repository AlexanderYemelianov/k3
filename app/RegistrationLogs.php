<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationLogs extends Model
{
    protected $fillable = ['user_id', 'registration_time'];
}
