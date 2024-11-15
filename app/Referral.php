<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $table = 'referral';
    protected $fillable = ['name', 'email', 'contact', "message"];
}
