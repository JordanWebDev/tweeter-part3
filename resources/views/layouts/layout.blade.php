
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tweeter is a social media networking application currently ranking number one in the world"  />
        <meta name="author" content="creator and ceo of tweeter the social networking application, jordan hayward"  />
        <meta name="keywords" content="tweeter social media application number 1 relevant news reports trending topics connect" />
        
        <link rel="stylesheet" href="{{ URL::asset('css/tweeter.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        @yield ('title')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Signup
                </div>
                <div class="links navigation1">
                    <a href="home">Home</a>
                    <a href="user">Profile</a>
                    <a href="about">About</a>
                    <a href="signup">Join Tweeter</a>
                    <a href="login">Login</a>
                    <a href="posts">Trending</a>
                    <a href="search">Explore</a>
                </div>
            </div>
        </div>
        <div class="container">

            @yield('content')
        </div>

        @include ('partials.footer')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
