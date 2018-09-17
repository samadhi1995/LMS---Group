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
<body background="img/SignBack.jpg">

<?php
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "student") {
        include 'include/nav-bar(student).php';
    } else if ($_SESSION['role'] == "lectuer") {
        include 'include/nav-bar(lectuer).php';
    }
}

?>


<?php
if (isset($_GET['subjectid'])) {
    $subjectid = $_GET['subjectid'];
    ?>

    <div class="wrapper">
        <div>
            <form action="olnewpost.php" method="POST" enctype="multipart/form-data">
                <h3>Edit the Fields</h3><br> Add Tittle Here
                <input type="text" name="tittle" style="color: #C62828;"><br>
                Add Description Here
                <input type="text" name="description" style="color: #C62828;"> <br>
                Add url Here
                <input type="text" name="link" style="color: #C62828;"> <br>
                Add File Here
                <input type="file" name="file" style="color: #C62828;"><br>
                <input type="hidden" name="subid" value="<?php echo $subjectid; ?>" style="color: #C62828;">

                <input type="submit" name="submit" value="POST" class="submit"
                       style="margin: 0px 50%;width: 90px;height: 35px;font-weight: bold;">

            </form>
        </div>
    </div>

    <?php
}


if (isset($_POST['subid'])){
    $subid=$_POST['subid'];
    $tittle = strip_tags($_POST['tittle']);
    $description = strip_tags($_POST['description']);
    $link = strip_tags($_POST['link']);
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $uploadstatus = 1;

    //echo $target_file . "<br>" . $file_type;
    if ($file_type != "jpeg" &&  $file_type != "jpg" &&  $file_type !=  "png" &&  $file_type !=  "pdf" &&  $file_type !=  "txt" &&  $file_type !=  "doc" &&  $file_type != "docx" &&  $file_type != "ppt" &&  $file_type != "pptx") {
        $uploadstatus=0;
        echo "File Type not allowed";
    }

    if (file_exists($target_file)) {

        echo "File Already Exist";
        $uploadstatus=0;
    }

    if($uploadstatus==1){
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
        {
            $sql="insert into com_post (tittle,description,link,path,subjectid) values ('$tittle','$description','$link','$target_file','$subid')";

            if (mysqli_query($conn,$sql)){
                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                echo "Posted Succesfully.!!";
                header('Refresh: 1; URL=olsubjects.php');
            }

        }
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

?>


</body>
</html>