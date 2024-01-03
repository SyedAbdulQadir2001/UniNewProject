<!DOCTYPE html>
<!--suppress HtmlUnknownTarget -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page</title>
    <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
    <link rel="stylesheet" href="{{asset("/assets/css/authStyle.css")}}">
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
        <h2>Sign In</h2>
        <form action="/login" method="POST" id="signup-form">
            @csrf

            @if(session()->has("error"))
            <div class="error">
                {{ session("error") }}
            </div>
            @endif

            @if(session()->has("message"))
                <div class="error">
                    {{ session("message") }}
                </div>
            @endif

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>


            <div class="mt-3">
                <span style="color:white;">If you dont have Account  <a style="text-decoration: none; color:#0069d9; margin-left: 5px;" href="/signup">Create New</a></span>

            </div>
            <input class="btn btn-gradient-primary" type="submit" value="Login">

        </form>
    </div>
</div>



</body>
</html>
