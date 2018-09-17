<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/mainStyle.css">
</head>
<body>
<div class="row greyback" >
    <div class="wrapper">

        <nav>
            <div class="logo"><a href="index.php"><img src="img/plogo.png" alt="" style="height: 70px; padding: 5px 5px"></a></div>
            <p style="float: right;margin-top: 25px;font-size: larger">Sri Lankan <b>No 1</b> Free Online Education Platform</p>

    
    </nav>
</div>
	</div>



<div class="row blackback">
    <div class="wrapper">

        <nav>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="contactus.php">CONTACT US</a></li>
                    <li><a href="welcome.php">WELCOME</a></li>
                </ul>
            </div>
            <div class="logout">
                <ul>
                    <li style="font-weight: normal;font-size: smaller">( <?php print_r($_SESSION['tname']); ?> logged in)</li>

                    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>


</body>
</html>