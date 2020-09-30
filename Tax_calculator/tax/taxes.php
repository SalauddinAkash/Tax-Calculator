<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Database</title>
</head>
<style>
    ul{
        margin:0px;
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
    A:hover {
        COLOR: rgb(19, 239, 255); TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 15px rgb(56, 255, 255); 
    }
    body{
        background-image: url("images/welcome1.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    h1{
        text-align:center;
        color:Black;
        margin-left: 20px;
        font-size: 25px;
        font-family: Arial;
        margin-top: 60px;
    }

    .tab:hover{
        box-shadow: 0 0 20px white;
    }

    .but:hover {
        box-shadow: 0 0 12px black;
        cursor: pointer;
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

        .ero{
            font-size:20px;
            font-family:calibri;
            color:red;
            margin-top:150px;
        }

    table,th,td{
        padding:10px;
        font-size: 20px;
        background: white;
        border: 1px solid black;
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif;
        transition: all 0.3s ease-in-out;
        opacity: 0.9;
        margin-top: 50px;
    }
    
</style>
<body>
    <ul>
        <img align ="left" src = "images/logov2.png" height="50px"/>
        <li><a href="index.php" class="burn">Logout</a></li>
    </ul>
    <br>
    <br>

        <button style="font-size: 20px;
        padding: 7px;
        color: black;
        margin-left:20px;
        transition: all 0.2s ease-in-out;"

        class="but" onclick="window.location.href='insert.php';">Insert Data</button>

        <button style="font-size: 20px;
        padding: 7px;
        color: black;
        margin-left:20px;
        transition: all 0.2s ease-in-out;"
        class="but" onclick="window.location.href='uedit.php';">Edit Data</button>

        <button style="font-size: 20px;
        padding: 7px;
        color: black;
        margin-left:20px;
        transition: all 0.2s ease-in-out;"
        class="but" onclick="window.location.href='loan.php';">Insert Loan</button>

    <h1>Tax Information:</h1>    
    <?php
    require_once("dbconnect.php");
    $sql = "SELECT * FROM taxes INNER JOIN ses on taxes.trade=ses.id WHERE trade=id";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)!=0){
        ?>
        <table align="center" class=tab>
        <tr style="color: rgb(107, 196, 255)">
            <th>License</th>
            <th>Tax ID</th>
            <th>Issue Date</th>
            <th>Tax Amount</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
        </tr>
    <?php
        }
    }
    else{
        ?>
        <div class="ero" align="center">
        <?php echo 'Tax not Assigned Yet.'; ?>
        </div>
        <?php
    }
    ?>
    </table>


    <h1>Loan Information:</h1>


    <?php
    $sql = "SELECT * FROM loan INNER JOIN ses on loan.trade=ses.id WHERE trade=id";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)!=0){
        ?>
        <table align="center" class=tab>
        <tr style="color: rgb(107, 196, 255)">
            <th>License</th>
            <th>Amount</th>
            <th>Year</th>
            <th>Interest</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
        </tr>
    <?php
        }
    }
    else{
        ?>
        <div class="ero" align="center">
        <?php echo 'There is no loan under this license.'; ?>
        </div>
        <?php
    }
    ?>
    </table>

    <h1>Company Information:</h1>

    <?php
    $sql = "SELECT * FROM company INNER JOIN ses on company.trade=ses.id WHERE company.trade=ses.id";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)!=0){
        ?>
        <table align="center" class=tab>
        <tr style="color: rgb(107, 196, 255)">
            <th>ID</th>
            <th>License</th>
            <th>Name</th>
            <th>Business</th>
            <th>Income</th>
            <th>Insurance</th>
            <th>Charity Waiver</th>
            <th>Rebate</th>
            <th>Address</th>
            <th>Number</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[5],'%' ?></td>
            <td><?php echo $row[6],'%' ?></td>
            <td><?php echo $row[7],'%' ?></td>
            <td><?php echo $row[8] ?></td>
            <td><?php echo $row[9] ?></td>
        </tr>
    <?php
        }
    }
    else{
        ?>
        <div class="ero" align="center">
        <?php echo 'There is no matching company for this License. Please try another license.'; ?>
        </div>
        <?php
    }
    ?>
    </table>

</body>
</html>