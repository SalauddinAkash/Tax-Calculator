<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url(images/bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .login-box{
            width: 280px;
            position: absolute;
            top: 45%;
            left: 50%;
            font-family: 'Calibri';
            transform: translate(-50%,-50%);
            color: black;
        }
        .login-box h1{
            float: left;
            font-size: 35px;
            border-bottom: 5px solid black;
            margin-bottom: 50px;
            padding-bottom: 10px;
        }
        .text-box{
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            font-size: 22px;
            padding: 10px 0;
            margin: 8px 0;
            border-bottom: 2px solid black;
        }
        .text-box i{
            width: 26px;
            float: left;
            text-align: center;
        }
        .text-box input{
            border: none;
            outline: none;
            background: none;
            color: black;
            font-size: 18px;
            width: 80px;
            float: left;
            margin: 0 10px;
        }
        .btn{
            width: 100%;
            background: none;
            border: 2px solid black;
            color: black;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 25px;
            transition: all 0.3s ease-in-out;
        }
        .btn:hover {
            color: rgba(0, 0, 0, 1);
            box-shadow: 0 0 12px #33E3FF;
        }
        .logo{
            text-align: center;
            padding-top: 150px;
        }
    </style>

</head>
<body>
    <div class="logo">
        <img width="289px" src="images/logov2.png">
    <div>
    <div class="login-box">
        <h1>Login</h1>
        <form action="signin.php" method="post">

            <div class="text-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input required="required" type="text" placeholder="Username" name="fname">
            </div>

            <div class="text-box">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input required="required" type="password" placeholder="Password" name="pass">
            </div>

            <button class="btn" type="submit">Sign In</button>
        </form>
    </div>
</body>
</html>