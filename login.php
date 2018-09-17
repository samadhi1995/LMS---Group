<?php
session_start();
if(isset($_SESSION['role'])){
    header('location: welcome.php');
}
if (isset($_POST['submit'])) {

    include_once("functions/connection.php");
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    $sql = "SELECT `stdno`,`fname`,`email`,`password` from `student` WHERE email='$email' AND password='$password'";
    $sql2 = "SELECT `tid`,`tname`,`temail`,`tpassword` from `lectuer` WHERE temail='$email' AND tpassword='$password'";

    if ($query = mysqli_query($conn, $sql)) {
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            /* echo "<br> student email found";*/
            foreach ($query as $result) {
                if ($password == $result['password']) {
                    $_SESSION['stdno'] = $result['stdno'];
                    $_SESSION['fname'] = $result['fname'];
                    $_SESSION['role'] = "student";
                    header('Location: welcome.php');
                } else {
                    /* echo "<br>incorrect password";*/

                }
            }

        } else if ($query2 = mysqli_query($conn, $sql2)) {
            $rows2 = mysqli_num_rows($query2);
            if ($rows2 == 1) {
                /*echo "lectuer email found";*/
                foreach ($query2 as $result2) {
                    if ($password == $result2['tpassword']) {
                        $_SESSION['tid'] = $result2['tid'];
                        $_SESSION['tname'] = $result2['tname'];
                        $_SESSION['role'] = "lectuer";
                        header('Location: welcome.php');
                    } else {
                        /*echo "<br>2incorrect password";*/
                    }
                }
            } else {
                /*echo "<br>2email not found";*/
            }

        }
    }
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
<?php include 'include/nav-bar(guest).php'; ?>

<div class="wrapper">

    <div class="login-form">
        <form action="login.php" method="post">
            <center><h3>WELCOME TO LEARNING LAB</h3></center>
            <br>
            <input type="email" name="email" placeholder="Enter Your Email Here" style="height: 38px;width: 100%">
            <br><br>
            <input type="password" name="password" placeholder="Enter Your Password Here"
                   style="height: 35px;width: 98%"> <br><br>
            <center><input type="submit" name="submit" value="Sign In"
                           style="width: 90px;height: 35px;font-weight: bold"></center>
        </form>
    </div>
</div>
    
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