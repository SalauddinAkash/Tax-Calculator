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
    button{
        font-size: 20px;
        padding: 7px;
        color: black;
        transition: all 0.2s ease-in-out;
        margin-left:20px;
    }
    .tab:hover{
        box-shadow: 0 0 20px white;
    }
    .but:hover {
        box-shadow: 0 0 12px black;
        cursor: pointer;
    }
    .burn:hover {
        COLOR: red; TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 20px #ff5e18;
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
    }
    
</style>
<body>
    <ul>
        <img align ="left" src = "images/logov2.png" height="50px"/>
        <li><a href="index.php" class="burn">Logout</a></li>
    </ul>
    <br>
    <br>
    <button style="margin-left:22px;" class="but" onclick="window.location.href='add.php';">Add User</button>
    <button class="but" onclick="window.location.href='remove.php';">Remove User</button>
    <button class="but" onclick="window.location.href='edit.php';">Edit Company</button>
    <button class="but" onclick="window.location.href='removec.php';">Remove Company</button>
    <button class="but" onclick="window.location.href='add_tax.php';">Assign Tax</button>
    <button class="but" onclick="window.location.href='edit_tax.php';">Edit Tax</button>
    
    <h1>
        Company Information:
    </h1>
    <?php
    require_once("dbconnect.php");
    $sql = "SELECT * FROM company";
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
    ?>
    </table>

    <h1>
        Loan Information:
    </h1>

    <?php
    $sql = "SELECT * FROM loan";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)!=0){
        ?>
        <table align="center" class=tab>
        <tr style="color: rgb(107, 196, 255)">
            <th>Trade License</th>
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
            <td><?php echo $row[3],'%' ?></td>

        </tr>
    <?php
        }
    }
    ?>
    </table>

    <h1>
        Tax Information:
    </h1>

    <?php
    $sql = "SELECT * FROM taxes";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)!=0){
        ?>
        <table align="center" class=tab>
        <tr style="color: rgb(107, 196, 255)">
            <th>Trade License</th>
            <th>Tax ID</th>
            <th>Year</th>
            <th>Amount</th>
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
    ?>
    </table>

    <div style="text-align: center; margin-top:50px;">
        Powered by Coffee, a LOT of coffee.
    </div>
</body>
</html>