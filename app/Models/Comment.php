<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static $comment;

    public static function newComment($request){
        self::$comment = new Comment();
        self::$comment->blog_id = $request->blog_id;
        self::$comment->name = $request->name;
        self::$comment->email = $request->email;
        self::$comment->comment = $request->comment;
        self::$comment->save();

    }
}
