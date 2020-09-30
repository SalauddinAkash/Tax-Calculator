<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a user!</title>
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

        h1{
            text-align:center;
            font-family:arial;
            font-size:28px;
            margin-top:150px;
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
            width: 100px;
            float: left;
            margin: 0 10px;
        }
        .burn:hover {
            COLOR: red; TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 20px #ff5e18;
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
        .floatleft {
            float:left;
        }
</style>

<body>
    <ul>
        <div class="floatleft">
            <li><a href="adminPage.php" class="burn">< Back to Taxes</a></li>
        </div>
    </ul>

    <h1>
        Set user credentials:
    </h1>
    <div class="login-box">
        <form action="add_user.php" method="post">

            <div class="text-box">
                <input required="required" type="text" placeholder="Trade ID" name="tl">
            </div>

            <div class="text-box">
                <input required="required" type="text" placeholder="Password" name="pass">
            </div>

            <button class="btn" type="submit">Add</button>

        </form>
    </div>
</body>
</html>