<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ContactFactory;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'email' => 'required' | 'email'
    );
}
