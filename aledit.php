<?php
session_start();
include 'include/islogin.php';
include("functions/connection.php");
?>


<!doctype html>
<html lang="en">
<head>

    <?php include 'include/head.php'; ?>
</head>
<body>

<?php
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "student") {
        include 'include/nav-bar(student).php';
    } else if ($_SESSION['role'] == "lectuer") {
        include 'include/nav-bar(lectuer).php';
    }
}
if (isset($_POST['reset'])) {

    $retittle = strip_tags($_POST['reTittle']);
    $redescription = strip_tags($_POST['reDescription']);
    $relink = strip_tags($_POST['reLink']);
    $repath = strip_tags($_POST['reFile']);
    $postid = $_POST['postid'];

    $sql = "UPDATE `m_post` SET `tittle` = '$retittle', `description` = '$redescription', `link` = '$relink', `path` = '$repath' WHERE `postid` = '$postid'";


    if (mysqli_query($conn, $sql)) {
        echo "New record successfully";
        header('Refresh: 1; URL=alsubjects.php');
    } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        mysqli_close($conn);
    }
}
?>

<?php
if (isset($_GET['postid'])) {
    $postid = $_GET['postid'];
    $sql = "SELECT * FROM `m_post` WHERE postid ='$postid'";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $data) {
        ?>

        <div class="wrapper">
            <div >
                <form action="aledit.php" method="POST" >
                    <h3>Edit the Fields</h3><br>
                    Change the Tittle Here
                    <input type="text" name="reTittle" value="<?php echo $data['tittle'] ?>" style="color: #C62828;"> <br>
                    Change the Description Here
                    <input type="text" name="reDescription" value="<?php echo $data['description'] ?>" style="color: #C62828;">
                    <br>
                    Change the URL Here
                    <input type="text" name="reLink" value="<?php echo $data['link'] ?>" style="color: #C62828;"> <br>
                    Change the File Path Here
                    <input type="text" name="reFile" value="<?php echo $data['path'] ?>" style="color: #C62828;"><br>
                    <input type="hidden" name="postid" value="<?php echo $postid; ?>" hidden >
                    <input type="submit" name="reset" value="OK" class="submit" style="margin: 0px 50%;width: 90px;height: 35px;font-weight: bold;">

                </form>
            </div>
        </div>

        <?php
    }
}
?>


</body>
</html>