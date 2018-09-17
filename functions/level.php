<?php
include 'connection.php';
if(isset($_GET['levelid'])){
    if($_GET['levelid']==0){
        ?>
        <option value="">Select the Level First</option>
        <?php
    }
    $levelid=$_POST['levelid'];
    $sql="select * from subject where levelid=$levelid";
    $result=mysqli_query($conn,$sql);
    foreach ($result as $subject){
    ?>
<option value="<?php echo $subject["subjectid"];?>"><?php echo $subject["subjectname"];?></option>
<?php
}
}

?>