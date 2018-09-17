<?php
session_start();

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "student") {
        include 'include/nav-bar(student).php';
    } else if ($_SESSION['role'] == "lectuer") {
        include 'include/nav-bar(lectuer).php';
    } else {
        include 'include/nav-bar(guest).php';
        echo "Error Loging";
    }
} else {
    include 'include/nav-bar(guest).php';
}
?>


<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <link rel="stylesheet" href="./css/mainStyle.css">
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
        <br>

<div class="wrapper">
    <div class="whatis" >
    <h3>What Is Learning LAB?</h3>
    <p>The learninglab.lk is a online learning system and offers tutorials and papers for university students.</p>
    </div>

    <div class="whatis" style="float: right;background-color: #E0E0E0;margin-top: 10px;padding: 5px 15px">
    <h3>How It Is Different From Other Educational Web Sites?</h3>
    <p>When using our web site you have to make a new account and have to sign in.</p>
    </div>

    <div class="whatis" style="float: left;background-color: #E0E0E0;margin-top: 10px;padding: 5px 15px">
    <h3>What Are The Benifits Of Using Our LearningLAB?</h3>
    <p>You can download any learning materials from our website
        and you can gain more knowledge by using these extra things.
        Also we uploaded papers and you can measure your knowledge by using these things.</p>
    </div>

</div>


<?php
include 'include/foot.php'
?>

</body>
</html>