<?php
include 'include/islogin.php';
include 'functions/connection.php';
echo "conected";

if (isset($_GET['postid'])) {
    $postid = $_GET['postid'];
    $sql = "DELETE FROM `com_post` WHERE postid ='$postid'";
    if(mysqli_query($conn, $sql)) {
        echo "deleted";
        header('Refresh: 1; URL=olsubjects.php');
    }else
        echo "error";
}
?>



