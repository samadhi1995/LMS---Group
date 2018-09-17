<?php

if (isset($_POST['submit'])) {
    include "functions/connection.php";

    $fname = strip_tags($_POST['fname']);
    $lname = strip_tags($_POST['lname']);
    $sex = strip_tags($_POST['sex']);
    $address1 = strip_tags($_POST['address1']);
    $address2 = strip_tags($_POST['address2']);
    $city = strip_tags($_POST['city']);
    $role = strip_tags($_POST['role']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['pw1']);

    $sql ="INSERT INTO `student`(`fname`,`lname`,`sex`,`address1`,`address2`,`city`,`role`,`email`,`password`) 
            VALUES('$fname','$lname','$sex','$address1','$address2','$city','$role','$email','$password')";
    //echo "test";

    if (mysqli_query($conn,$sql)){
        echo "New record successfully";
    }
    else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        mysqli_close($conn);
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

<?php include 'include/nav-bar(guest).php'; ?>

<div class="form" style="width: 75%; margin-left: 15%">
    <h3>Fill the Form</h3> <br>
<form method="POST" action="signup.php">
 First Name <br>
    <input type="text" name="fname" id="fname" required> <br>
Last Name <br>
    <input type="text" name="lname"  id="lname" > <br>

   <table style="width: 100%"> <tr><td>Gender</td><td></td><td>Date of Birth</td></tr>
       <tr>
           <td>Male : <input type="radio" name="sex" value="male"></td>
           <td>Female : <input type="radio" name="sex" value="female"></td>
           <td><input type="date" name="dob" placeholder="Ex: 1995-03-18"></td></tr>
   </table><br>
Address <br>
    <input type="text" name="address1" id="address1" placeholder="Line 1" required><br>
    <input type="text" name="address2" id="address2" placeholder="Line 2"> <br>
City/Town <br>
    <input type="text" name="city" id="city" required> <br><br>

Are you sure, you are a student ?
   <input type="checkbox" name="role" value="student" checked required>  YES <br>

E-Mail <br>
    <input type="email" name="email" id="email" required> <br>
Set A Password <br>
    <input type="password" name="pw1" id="pw1" style="height: 25px;width: 100%" required> <br>
Confirm the Password <br>
    <input type="password" name="pw2" id="pw2" style="height: 25px;width: 100%" required><br><br>

    <input type="submit"  name="submit"  value="Sign Up" style="margin: 0px 50%;width: 90px;height: 35px;font-weight: bold" >
    
</form>

</div>
<br>
      
<?php
include  'include/foot.php'
?>
</body>
</html>