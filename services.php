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
<div class="wrapper">
    <div style="float: left;background-color: #E0E0E0;margin-top: 10px;padding: 5px 15px">
        <h3>Our Services</h3>
        <p>We support University students to gain more knowledge and you can download any learn materials.
            and you can follow us on LearningLAB to see more tutorials and videos. We hope to spread this to any
            subject area yet.</p>
    </div>
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
<br>
        <br>
<?php
include 'include/foot.php'
?>

</body>
</html>