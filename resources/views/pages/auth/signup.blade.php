<!DOCTYPE html>
<!--suppress HtmlUnknownTarget -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
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
        <form action="/signup" method="POST" id="signup-form">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Confirm Password:</label>
            <input type="password" id="password" name="confirm_password" required>


            <div class="mt-3 pt-5 bg-warning">
                <p style="color:white">You Already Have Account?  <a style="text-decoration: none; color:#0069d9; margin-left: 5px;" href="/signin">Signin</a></p>

            </div>

            <input type="submit" value="Signup">

        </form>
    </div>
</div>



</body>
</html>
