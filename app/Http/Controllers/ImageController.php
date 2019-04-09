<?php

namespace App\Http\Controllers;
use DB;
use App\Tweet;
use App\Tweetlike;
use App\followers;
use App\following;
use App\Comments;
use App\User;
use Auth;

use Illuminate\Http\Request;
use App\Http\Resources\Tweet as TweetResource;
use App\Http\Resources\Comment as CommentResource;


class ImageController extends Controller
{
    public function upload(ImageRequest $request)
    {
        $request->user()->avatar = $request->image;
        $request->user()->save();

        return response( content: null, status: 200);
    }
}
