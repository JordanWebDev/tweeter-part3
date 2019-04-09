@php
use App\Tweet;

$tweets = Tweet::orderBy('created_at', 'DESC')->get();

@endphp
<div class="container">
    <div class="card">
        <div class="card-header">Tweet Feed</div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            You are logged in!

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                    <div class="form-group">
                        <form method="post" action="tweets">
                            @csrf
                            <textarea class="form-control" name="tweet" placeholder="Enter Tweet Here"></textarea>
                            <button class="btn btn-success">TweetMessage</button>
                        </form>
                    </div>

                    <upload-component :user="{{auth()->user()}}"></upload-component>

                    <div id="tweetsWrapper">
                        <upload-component :user="{{auth()->user()}}"></upload-component>

                        <tweet-component v-for="tweet in tweets" :tweet=tweet></tweet-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    currentlyLoggedInUserInUserId = {{ $user->id }};

</script>
