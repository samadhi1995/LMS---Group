<?php session_start();
session_destroy();

header('Refresh: 1; URL=index.php');
?>


<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <!--<meta http-equiv="refresh" content="5" url="index.php" >-->
</head>

<body background="img/SignBack.jpg">
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
<?php include 'include/nav-bar(guest).php'; ?>
<center> <div class="logout" >
        <h2><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
        <span class="sr-only">Loading...</span></h2>
        <h3>You are logging out</h3>

</div> </center>


</body>
</html>