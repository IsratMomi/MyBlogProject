<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function newComment(Request $request){
        Comment::newComment($request);
        return redirect()->back()->with('message','Comment posted');

    }
}
