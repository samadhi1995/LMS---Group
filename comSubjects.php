<?php
session_start();
include 'include/islogin.php';
include 'functions/connection.php';
?>

<!doctype html>
<html lang="en">

	
<head>
    <?php include 'include/head.php'; ?>
</head>
	
	
<body background="img/SignBack.jpg">


<!--nav bar start-->
<?php
if ($_SESSION['role'] == "student") {
include 'include/nav-bar(student).php';
} else if ($_SESSION['role'] == "lectuer") {
include 'include/nav-bar(lectuer).php';
}
?>
<!--nav bar end-->
<div class="wrapper">
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
        <br>
        <br>
        <br>
<?php

$sql = "SELECT `subjectname`,`subjectid` FROM `com_subject`";
$result = mysqli_query($conn, $sql);
foreach($result as $data){
    ?>
<a href="com_post.php?subid=<?php echo $data['subjectid']; ?>" class="button"><?php echo $data['subjectname']; ?></a><br>
    
<?php
    //echo $data['subjectname']."<br>";
}
?>
</div>
<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
     

<?php
include 'include/foot.php'
?>

</body>
</html>