<?php session_start();
include 'include/islogin.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
        <link rel="stylesheet" type="text/css" href="css/sfaculty.css">
</head>
<body>


<?php if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "student") {
        include 'include/nav-bar(student).php';
        function nameprint()
        {
            echo "Hi dear student  ";
            print_r($_SESSION['fname']);
        }
    } else if ($_SESSION['role'] == "lectuer") {
        include 'include/nav-bar(lectuer).php';
        function nameprint()
        {
            echo "Hello Mr.";
            print_r($_SESSION['tname']);
        }
    } else {
        include 'include/nav-bar(guest).php';
        echo "Error Loging";

    }
} else {
    echo "std4";
}

?>



<center>
		<br>
        <br>
        <br>
        <br>
 		<br>
        <br>
        <br>
        <br>
	  	<br>
        <br>
    <div class="wrapper">
        <div><p style="font-weight: bold;margin-bottom: 0px;padding-bottom: 0px"> Welcome to Learning LAB </p>
            <p style="margin-top: 0px;padding-top: 0px"><?php nameprint(); ?></p></div>
        
        
    </div>
</center>



    <h1 id="select_text">Please Select Your Faculty</h1>
<div id="div_x">
    <div class="flip3d">
        <div class="back">
        <br>
       
        <a href="comSubjects.php?levelname=ol" class="button">Year 1</a>
        <a href="empty.php?levelname=#" class="button">Year 2</a>
        <a href="empty.php?levelname=#" class="button">Year 3</a>
        <a href="empty.php?levelname=#" class="button">Year 4</a>
        </div>
        <div class="front" style="background-color:gray"><h2>SCHOOL<br>OF<br>COMPUTING</h2></div>
    </div>
    <div class="flip3d">
        <div class="back" >
        <br>
        <br>
        <br>
        <br>
       <a href="bisSubjects.php?levelname=ol" class="button">Year 1</a>
        <a href="empty.php?levelname=#" class="button">Year 2</a>
        <a href="empty.php?levelname=#" class="button">Year 3</a>
        <a href="empty.php?levelname=#" class="button">Year 4</a>
        </div>
        <div class="front" style="background-color:gray"><h2>SCHOOL<br>OF<br>BUSINESS</h2></div>
    </div>

    <div class="flip3d">
        <div class="back">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a>This Faculty is currently unavailable </a></div>
        <div class="front" style="background-color:gray"><h2>SCHOOL<br>OF<br>ENGINEERING</h2></div>
    </div>
    </div>
    


<?php
include 'include/foot.php'
?>

</body>
</html>