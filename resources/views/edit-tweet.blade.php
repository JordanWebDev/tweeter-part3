create edit page copy homeview
textarea disabled css border none
@php
    if(isset($canEdit) && $canEdit){

    @endphp
        <form method="post" action="">
            <textarea class="tweets-edit">{{$tweet->tweet}}</textarea>
        </form>
    @php

    }else{
    @endphp
    {{ $tweet->tweet}}
    @php
    }
    @endphp
<form method="post" action="">
    <textarea class="tweets-edit">{{$tweet->tweet}}</textarea>
</form>
<a href="/edit-tweet/{{$tweet->id}} = {{$tweet->id}}">Edit</a> {{$tweet->user->name}} @ {{ $tweet->created_at}}

<form name="editTweet" method="post" action="edit-tweet">
    @csrf
    <textarea class="form-control" name="comment" placeholder="Edit Tweet" value="{{$tweet->tweet}}"></textarea>
    <input type="hidden" name="tweet_id" value="{{$tweet->id}}" />
    <button class="btn btn-success">Edit Tweet</button>
</form>

delete @php
    if(isset($tweet->can_delete)){post form value delete value tweet id}
@endphp

displayname of tweeter who tweeted
for each in posts Controller
$tweets = $tweets(get);
tweetsCollection = array();
@foreach
$newTweet = $tweet;
$newTweet['comments'] = tweet::find($tweet->id)->user;
$newTweet['user'] = Tweet::find($tweet->id)->user;

if($user->id == $tweet->user_id){
    $newTweet['has_permissions'] = 1;
}
$tweetCollection[] = $newTweet;

$tweets = $tweetCollection;
