<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinUsForm extends Model
{
    protected $table = 'table_joinus';
	protected $fillable = ['name', 'email', 'phone'];
}
