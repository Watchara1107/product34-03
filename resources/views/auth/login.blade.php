<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('authen/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="loginBox"> <img class="user" src="{{ asset('authen/image/logo2.png') }}" height="100px" width="100px">
        <h3>Sign in</h3>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="inputBox"> 
                <input id="uname" type="email" name="email" placeholder="Email"> 
                <input id="pass" type="password" name="password" placeholder="Password"> 
            </div> 
            <input type="submit" name="" value="Login">
        </form> 
        <a href="{{ route('password.request') }}">Forget Password<br> </a>
        <div class="text-center">
           <a href="{{ route('register') }}"> <p style="color: #59238F;">Sign-Up</p></a>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>