<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function likeIt(Reply $reply)
    {
        $reply->like()->create([

            'user_id' => auth()->id(),
            //'user_id' => 1
        ]);
    }

    public function unLikeIt(Reply $reply)
    {
        $reply->like()->where(['user_id'=>auth()->id()])->first()->delete();
    }

}
