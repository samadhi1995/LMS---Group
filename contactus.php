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
    
    <table border="0" style="width: 100%">
        <form action="" method="">

            <tr>
                <td style="width: 20%">Enter Your Name:*    </td>
                <td style=""> <input type="text" name="un" id="un"  ></td>

            </tr>
            <tr>
                <td>Enter Your Email:*</td>
                <td><input type="email" name="email" id="email"  ></td><br>
            </tr>
            <tr>
                <td>Enter Contact Number:*</td>
                <td><input type="text" name="cn" id="cn"  ></td><br>
            </tr>

            <tr>
                <td>Enter Your Message:*</td>
                <td><textarea id="cmt" name="cmt" rows="10" cols="60">
    </textarea></td>
            </tr>
            <tr>
                <td colspan="2"> <center><input type="submit" name="Submit" style="margin: 0px 50%;width: 90px;height: 35px;font-weight: bold"></center></td>

        </form>
    </table>
       
</div>


<?php
include 'include/foot.php'
?>

</body>
</html>