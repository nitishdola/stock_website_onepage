<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public static $rules = [
    	'name' 				=>  'required|min:3',
    	'email'  			=>  'required|email',
    	'message' 			=>  'required|min:10',
    ];
}
