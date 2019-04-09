@php
if(isset($tweetsCollection->liked)&&($tweetsCollection->liked==false)){

@endphp
    <form name="likeform" method="post" action="like">
        @csrf
        <textarea class="form-control" name="comment" placeholder="Comment Here" value="{{$tweet->id}}"></textarea>
        <input type="hidden" name="user_id" value="{{$user->id}}" />
        <input type="hidden" name="tweet_id" value="{{$tweet->id}}" />
        <input type="hidden" name="like" value="1" />
        <button class="btn btn-success">like</button>
    </form>
@php
}else{
@endphp
    <form name="likeform" method="post" action="like">
        @csrf
        <textarea class="form-control" name="comment" placeholder="Comment Here" value="{{$tweet->id}}"></textarea>
        <input type="hidden" name="tweet_id" value="{{$tweet->id}}" />
        <input type="hidden" name="like" value="0" />
        <button class="btn btn-success">unlike</button>
    </form>
@php
}
@endphp
