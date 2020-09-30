<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success!</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url(images/welcome1.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .btn:hover{
        color: rgba(0, 0, 0, 1);
        box-shadow: 0 0 12px #33E3FF;
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
    h1{
        text-align:center;
        font-family:Arial;
        font-size:30px;
        margin-top:15%;
    }
    ul{
        padding:20px 20px;
        list-style-type: none;
        text-align: right;
    }
    li{
        display: inline;
        margin-left:20px;
        font-size: 30px;
    }
    a{
        color: black;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        font-family: Calibri;
    }
    .burn:hover {
            COLOR: red; TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 20px #ff5e18;
        }
    .floatleft {
        float:left;
    }
</style>
<body>
    <ul>
        <div class="floatleft">
            <li><a href="taxes.php" class="burn">< Back to Taxes</a></li>
        </div>
    </ul>
    <h1>Userdata insertion successful</h1>
    <div class="login-box">
        <button class="btn" onclick="window.location.href='insert.php';">Add another user</button>
    </div>
</body>
</html>