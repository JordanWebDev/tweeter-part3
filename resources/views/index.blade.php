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

        <title>Tweeter - the best ranking social media application across all platforms</title>
    </head>
    <body>
        <div class="container">
            <div class="row mainpg">
                <div class="col-6 containbird">
                    <span class="Icon Icon --search"></span>
                    <p id="interests">Follow your interests.</p>
                    <span class="Icon Icon --people"></span>
                    <p id="people">Here what people are talking about.</p>
                    <span class="Icon Icon --reply"></span>
                    <p id="join">Join the conversation.</p>
                </div>
                <div class="col-6">
                    <div class="container column2">
                        <div class="row">
                            <div class="col-6">
                                <img />
                            </div>
                            <div class="col-6">
                                <a class="btn btn-success" id="toplogbtn" href="/login" role="button">Login</a>
                            </div>

                        </div>
                        <div class="rightsidepg">
                            <div>
                                <h3 id="h2see">See what's happening in the world right now</h3>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h4 id="h3join">Join Twitter today.</h4>

                                    <a class="btn btn-primary homebuttons signupbutton" id="signupbtn" href="/signup" role="button">signup</a>

                                </div>
                                <div class="col-12">
                                    <a class="btn btn-primary homebuttons loginbutton" id="loginbtn" href="/login" role="button">Login</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
