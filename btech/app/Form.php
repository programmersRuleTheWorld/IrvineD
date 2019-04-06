<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'cellnum',
        'projtype',
        'description'
    ];
}
