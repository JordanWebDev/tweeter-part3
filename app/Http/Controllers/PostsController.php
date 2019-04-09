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

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function store(){
        return view('home');
    }
    public function index(){
        $tweets = Tweet::limit(10)->get();
        $comments = Comments::limit(10)->get();
        $user = Auth::user();

        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        $tweetsCollection = array();

        foreach ($tweets as $tweet){
        $newTweet = $tweet;
        $newTweet['comments'] = Tweet::find($tweet->id)->user;

        $newTweet['user'] = Tweet::find($tweet->id)->user;

        if($user->id == $tweet->user_id){

            $newTweet['has_permissions'] = 1;
        }
        $tweetCollection[] = $newTweet;
        $tweets = $tweetCollection;


    }   return view('home', compact('user','tweets','comments'));

}
    public function show($id){
        $tweet = Tweet::find($id)->Comments;
        return view('home', compact('tweets'));
    }
    public function show2(Tweet $tweet){
        return $tweet;
    }
    public function create(request $request){
        $user = Auth::user();
        $Tweetsmodel = new Tweet;
        $Tweetsmodel->user_id = $user->id;
        $Tweetsmodel->tweet = $request->tweet;
        $Tweetsmodel->save();
        return redirect('home');

        $tweets = Tweet::orderBy('created_at','desc')->get();
        return view('home', compact('tweets'));
    }
    public function create_comment(request $request){
        $user = Auth::user();
        $commentsModel = new Comments;
        $commentsModel->user_id = $user->id;
        $commentsModel->tweet_id = $request->tweets->id;
        $commentsModel->comments = $request->comment;
        $commentsModel->save();
        return redirect('home');

        $comments = Comments::orderBy('created_at','desc')->get();
        return view('home', compact('comments','tweet_id','user_id'));
    }
    public function destroy(request $request){
        $Tweetsmodel = Tweet::find($request->tweet);
        $Tweetsmodel->delete();

        Session::flash('message', 'successfully removed');
        return Redirect::to('home');

    }
    public function editTweetDisplay($id){
        $Tweetsmodel = Tweet::find($id);

        return view('editTweet', compact('tweets'));

    }
    public function editTweet(request $request){
        $user = Auth::user();
        $Tweetsmodel = Tweet::find($request->tweet_id);
        $Tweetsmodel->tweet = $request->tweet;
        $Tweetsmodel->save();
        return redirect('home');
    }
    public function follow(request $request){
        $user = Auth::user();
        $Tweetsfollowmodel = new following;
        $Tweetsfollowmodel->user_id = $user->id;
        $Tweetsfollowmodel->followers_id = $request->followers_id;
        $Tweetsfollowmodel->follow = $request->follow;
        $Tweetsfollowmodel->save();

        foreach ($following as $follow) {
            $newfollower = $follower;

            $newfollower['follow'] = false;
            $following = \DB::table('following')->where('user_id', $user->id)->where('followers_id', $followers->id)->orderBy('updated_at', 'desc')->first();
            if(isset($following->follow)&&($following->follow == "1")){

                $newfollower['follow'] = true;
            }
        }
       return view('home', compact('user','follow'));

    }
    public function following(request $request){
        $user = Auth::user();
        $Tweetslikemodel = new Tweetlike;
        $Tweetslikemodel->user_id = $user->id;
        $Tweetslikemodel->tweet_id = $request->tweet_id;
        $Tweetslikemodel->like = $request->like;
        $Tweetslikemodel->save();
        return redirect('home');

        foreach ($tweets as $tweet) {
            $newTweet = $tweet;

            $newTweet['liked'] = false;
            $tweetlike = \DB::table('Tweetlikes')->where('user_id', $user->id)->where('tweet_id', $tweet->id)->orderBy('created_at', 'desc')->first();
            if(isset($tweetlike->like)&&($tweetlike->like == "1")){

                $newTweet['liked'] = true;
            }
        }
    }
    public function getAllTweets(){
        $tweets = Tweet::get();
        return new TweetResource($tweets);
    }
    public function getTweetsByNumber($number){
        $tweets = Tweet::limit($number)->get();
        return new TweetResource($tweets);
    }
    public function getTweetsByNumberFromStartPoint($number, $id){
        $tweets = Tweet::limit($number)->where("id", ">", $id)->get();
        return new TweetResource($tweets);
    }
    public function likeTweetApi(request $request){
        $Tweetslikemodel = new Tweetlike;
        $Tweetslikemodel->user_id = $request->$user_id;
        $Tweetslikemodel->tweet_id = $request->tweet_id;
        $Tweetslikemodel->like = $request->like;
        $Tweetslikemodel->save();
        if ($Tweetslikemodel->save()) {
            return '{"success" : "1"}';
        }else {
            return '{"success" : "0"}';
        }

    }
    public function getTweetComments($tweetId){
        $comments = Comments:: where('tweet_id', '=', $tweetId)->get();
        return new CommentResource($comments);

    }
    public function newCommentApi(request $request){
        $commentApi = new Comments;
        $commentApi->user_id = $request->user_id;
        $commentApi->tweet_id = $request->tweet_id;
        $commentApi->comment = $request->comment;

        if ($request->comment) {
            $commentApi->save();

            return '{"success" : "1"}';
        }else {
            return '{"success" : "0"}';
        }

    }
    public function editprofile(request $request){
        $currentUser - Auth::user();
        $user = $user->find($user_Id);
        $Edit->first_name = $request->first_name;
        $Edit->last_name = $request->last_name;
        $Edit->tweet_id = $request->tweet_id;
        $Edit->like = $request->like;
        $Edit->save();

        return redirect('profile');
    }
    //last step create form
}
