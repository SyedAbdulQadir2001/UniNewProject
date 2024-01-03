<!DOCTYPE html>
<!--suppress HtmlUnknownTarget -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="{{asset("/assets/css/authStyle.css")}}">
    <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
</head>
<body>

<div id="container">
    <div id="left">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Silver_Jubilee_Gate_Karachi_University.jpg/1200px-Silver_Jubilee_Gate_Karachi_University.jpg" alt="University Image">
    </div>

    <div id="right">
        <div class="logo">
            <img src="/assets/images/logo.png" alt="" srcset="">
        </div>
        <h2 class="text-white pb-3">Sign In</h2>
        @session("error")
        <div class="alert alert-danger m-5" role="alert">
            <h5>{{ $value }}, Please <a href="/signin"> Signin </a></h5>
        </div>
        @endsession

        @error("email")
        {{$message}}
        @enderror
        @error("password")
        <div class="alert alert-danger m-5" role="alert">
            <h5>{{$message}}</h5>
        </div>
        @enderror
        <form action="/signup" method="POST" id="signup-form">
            @csrf
            <div class="form-group">
                <label class="form-label" for="name">Name:</label>
                <input class="form-control-sm" type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email:</label>
                <input class="form-control-sm" type="email" id="email" name="email" required>
            </div>


            <div class="form-group">
                <label class="form-label" for="password">Password:</label>
                <input class="form-control-sm" type="password" id="password" name="password" required>
            </div>


            <div class="form-group">
                <label class="form-label" for="password">Confirm Password:</label>
                <input class="form-control-sm" type="password" id="password" name="confirm_password" required>
            </div>



            <div class="py-3 ">
                <p class="text-white">You Already Have Account?  <a style="text-decoration: none" href="/signin">Signin</a></p>

            </div>

            <input class="btn btn-primary" type="submit" value="Signup">

        </form>
    </div>
</div>



</body>
</html>
