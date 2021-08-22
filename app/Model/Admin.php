<?php

namespace App\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'email', 'password'
    ];
}


















