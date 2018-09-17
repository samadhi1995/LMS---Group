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

<?php
if ($_SESSION['role'] == "student") {
    include 'include/nav-bar(student).php';
    ?> <div class="wrapper">
    <?php
    $subid=$_GET['subid'];
    $sql = "SELECT * FROM `com_post` where subjectid='$subid'";
    $result = mysqli_query($conn, $sql);
    foreach($result as $data){
        ?>
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

        <table><tr>
                <td style="width: "><a style="background-color:#01579B;color: #E0E0E0; padding: 30px;padding-top: 22px;padding-bottom: 32px;font-size: 25px"><?php echo $data['postid'] ?></a></td>
                <td style="width: 100%"><div class="post">
                        <table border="0" style="width: 100%; margin-top: 10px">
                            <tr>
                                <th rowspan="3"></th>
                                <th colspan="3" class="postth" style="background-color: #424242; color: #E0E0E0 "><?php echo $data['tittle'] ?></th>

                            </tr>
                            <tr>
                                <div >
                                    <td style="width: 50%;background-color: #BDBDBD"><center><?php echo $data['description'] ?></center> </td>
                                    <td style="width: 25%;background-color: #BDBDBD"><center><a href="<?php echo $data['link'] ?>" >
                                                <h3><i class="fa fa-youtube-play" aria-hidden="true"></i></h3></a> </center></td>
                                    <td style="width: 25%;background-color: #BDBDBD"><center><a href="<?php echo $data['path'] ?>" class="download" download>Download</a></center></td>
                                </div>
                            </tr>
                        </table>
                    </div></td></tr></table>

        <br>

        <?php
    }
    ?>

        
</div> <?php
} else if ($_SESSION['role'] == "lectuer") {
    include 'include/nav-bar(lectuer).php';
    ?> <div class="wrapper">
    <?php
    $subid=$_GET['subid'];
    $sql = "SELECT * FROM `com_post` where subjectid='$subid'";
    $result = mysqli_query($conn, $sql);
    ?>
       <center> <a href="olnewpost.php?subjectid=<?php echo $subid; ?>" class="button2">New Post</a></center>

        <?php
    foreach($result as $data){
        ?>
        <table><tr>
                <td style="width: "><a style="background-color:#616161;color: #E0E0E0; padding: 30px;padding-top: 42px;padding-bottom: 50px;font-size: 25px"><?php echo $data['postid'] ?></a></td>
                <td style="width: 100%"><div class="post">
                        <table border="0" style="width: 100%; margin-top: 10px">
                            <tr>
                                <th rowspan="3"></th>
                                <th colspan="3" class="postth" style="background-color: #424242; color: #E0E0E0 "><?php echo $data['tittle'] ?></th>

                            </tr>
                            <tr>
                                <div >
                                    <td style="width: 50%;background-color: #BDBDBD"><center><?php echo $data['description'] ?></center> </td>
                                    <td style="width: 25%;background-color: #BDBDBD"><center><a href="<?php echo $data['link'] ?>" >
                                                <h3><i class="fa fa-youtube-play" aria-hidden="true"></i></h3></a> </center></td>
                                    <td style="width: 25%;background-color: #BDBDBD"><center><a href="<?php echo $data['path'] ?>" class="download" download>Download</a></center></td>
                                </div>
                            </tr>
                            <tr><td><center><a href="oledit.php?postid=<?php echo $data['postid']; ?>" class="button2"  >Edit Post</a></center></td>
                                <td colspan="2"><center><a href="delete.php?postid=<?php echo $data['postid']; ?>" class="button2"  >Delete Post</a></center></td></tr>
                        </table>
                    </div></td></tr></table>

         <br>

        <?php
    }
    ?>
</div> <?php
}
?>



<?php
include 'include/foot.php'
?>

</body>
</html>