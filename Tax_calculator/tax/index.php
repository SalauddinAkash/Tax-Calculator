<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tax Calculator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <?php
    require_once('dbconnect.php');
    $sql="DELETE FROM ses";
    $result = mysqli_query($conn,$sql);
    ?>
	<div class="header">
     <div class="navbar">
         <div class="logo">
             <a href="#"><img src="images/logo.jpg"></a>
         </div>
         <div class="menu">
             <ul>
                 <li>Home</li>
                 <li>About</li>
                 <li>Services</li>
                 <li>Mission</li>
                 <li>Contact</li>
                 <input type="text" placeholder="Search..">
             </ul>
         </div>
         <div class="login-btn"><a href="login.php">Login</a></div>
     </div>   

     <div class="banner">
         <div class="app-text">
             <h3>Welcome to Taxpayer Online Service</h3>
             <h1>Income<br>Tax</h1>
             <p>E-filing website is the official portal of the Income Tax Department, National Board of Revenue, Bangladesh. The website is the government’s attempt to create a friendly and automated tax environment for the citizens and other stakeholders in calculating and submitting Tax returns.



</p>
</div>

             <div class="btn-group">
                 <div class="signup-btn"><a href="https://www.etaxnbr.gov.bd/tpos/home?fbclid=IwAR1JHDDa8w5URtrAYAV4WZV0qgRbrKb3JF64UOSSlG-5dYk4QjwhDPX7a0M">Read more</a></div>
             </div>
             
         </div>
     

     <div class="about-services">
         <ul>
             <li>
                 <img src="images/t1.jpg">
                 <h1>Why You Should Pay Taxes</h1>
                 <p>The thought "Why should I pay income tax?" might have crossed your mind at least a few times, especially while going through your salary slip or filing tax returns. As taxes can eat up a considerable portion of your salary, it is prevalent for many people to believe that taxes are nothing but a burden.</p>
            
               <button class="btn warning"><a href="https://www.adityabirlacapital.com/abc-of-money/why-is-it-important-to-pay-your-income-tax">Read More</a></button>
      </li>
         </ul>
         <ul>
             <li>
                
                 <img src="images/j2.jpg">
                 <h1>What happens when you don’t pay up</h1>
                 <p>The National Board of Revenue (NBR) has taken a move to bring prosecution against some taxpayers on case-to-case basis for their failure to submit tax returns despite having taxable incomes.</p>

                  <button class="btn warning"><a href="https://thefinancialexpress.com.bd/trade/taxpayers-to-face-action-for-failure-to-submit-returns-1567314430?amp=true&fbclid=IwAR1i8dLpqsndlf6WJAQqlnVkMUAZWu24OzKE1YAwNj4-BA1IDBc1FgPt0aw"> Read More</a></button>
             </li>
         </ul>
         <ul>

             <li>
                 <img src="images/helpline.jpg">
                 <h1>How we can help you out </h1>
                 <p>Income Tax is a direct tax. Income tax is based on the income of the assesse. Income Tax should be paid & filed yearly based on the income & by using the PAN No. Income tax is the most important tax in our country, every person whose total income Exceed Maximum Exemption Limit (MEL) has to deal with Income Tax Act and Income Tax Authorities.</p>

                 <button class="btn warning"><a href="https://vathelplinebd.com/income-tax-services"> Read More</a></button>
             </li>
         </ul>
     </div>

     <div class="social-icons">
         <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
         </ul>
     </div>
    </div>
</body>
</html>