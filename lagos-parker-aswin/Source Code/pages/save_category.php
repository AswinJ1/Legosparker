<?php require_once('../check_login.php');?>
<?php
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
include('../connect.php');


extract($_POST);
 $sql ="INSERT INTO tblcategory (VehicleCat,CreationDate)VALUES ('".$_POST['VehicleCat']."', '$current_date')";
//echo "<pre>";print_r($sql); exit;
 if ($conn->query($sql) === TRUE) {
      $_SESSION['success']=' Record Successfully Added';
     ?>
<script type="text/javascript">
window.location="../viewcategory.php";
</script>
<?php
} else {
      $_SESSION['error']='Something Went Wrong';
?>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<script type="text/javascript">
window.location="../viewcategory.php";
</script>
<?php } ?>


