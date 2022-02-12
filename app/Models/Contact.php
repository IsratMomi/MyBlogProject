<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static $message;

    public static function newMessage($request){
        self::$message = new Contact();
        self::$message->name = $request->name;
        self::$message->email = $request->email;
        self::$message->message = $request->message;
        self::$message->save();
    }
}
