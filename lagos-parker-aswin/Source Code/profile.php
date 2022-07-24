
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->

<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>

 <?php
 include('connect.php');
if(isset($_POST["btn_update"]))
{
    extract($_POST);
   
  if($_FILES['image']['name']!=''){
      $file_name = $_FILES['image']['name'];
      $file_type = $_FILES['image']['type'];
      $file_size = $_FILES['image']['size'];
      $file_tem_loc = $_FILES['image']['tmp_name'];
      $file_store = "uploadImage/Profile/".$file_name;

      if (move_uploaded_file($file_tem_loc, $file_store)) {
        echo "file uploaded successfully";
      }
  }
  else{
    $file_name=$_POST['old_image'];
  } 
      $folder = "uploadImage/Profile/";

      if (is_dir($folder)) 
      {
         if ($open = opendir($folder))

          while (($image=readdir($open)) !=false) {
              
              if($image=='.'|| $image=="..") continue;

              echo '<img src="uploadImage/Profile/'.$image.'" width="150" height="150">';
          }

          closedir($open);
        } 

   $q1="UPDATE admin SET `fname`='$fname',`lname`='$lname',`email`='$email',`contact`='$contact',`gender`='$gender',`image`='".$file_name."' where id = '".$_SESSION["id"]."'";

    if ($conn->query($q1) === TRUE) {
   
      $_SESSION['success']='Record Successfully Updated';
      ?>
      <script type="text/javascript">
        window.location = "profile.php";
      </script>
      <?php

} else {
   
      $_SESSION['error']='Something Went Wrong';
}


  ?>
  <script>

  </script>
  <?php
}

?>

<?php
$que="select * from  admin where id = '".$_SESSION["id"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
  //print_r($row);
  extract($row);
  $fname = $row['fname'];
  $lname = $row['lname'];
  $email = $row['email'];
  $contact = $row['contact'];
 // $dob1 = $row['dob'];
  $gender = $row['gender'];
  $image = $row['image'];
}

?> 
   <div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Profile</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>

<li class="breadcrumb-item"><a href="profile.php">Profile</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">

</div>
<div class="card-block">
<form id="main" method="post" enctype="multipart/form-data">

<div class="form-group row">
<label class="col-sm-2 col-form-label">First Name</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname;?>"  placeholder="Enter first name....">
<span class="messages"></span>
</div>
<label class="col-sm-2 col-form-label">Last Name</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname;?>" placeholder="Enter last name...">
<span class="messages"></span>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-4">
<input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>" placeholder="Enter valid e-mail address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
<span class="messages"></span>
</div>
<label class="col-sm-2 col-form-label">Gender</label>
<div class="col-sm-4">
<select name="gender" class="form-control" required>
<option value="Male"  <?php if($gender=="Male"){ echo "selected";}?>>Male</option>
<option value="Female" <?php if($gender=="Female"){ echo "selected";}?>>Female</option>
</select>
<span class="messages"></span>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Contact</label>
<div class="col-sm-4">
<input type="tel" class="form-control" id="contact" name="contact" value="<?php echo $contact;?>" placeholder="Enter valid contact number..." minlength="10" maxlength="10" pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$">
<span class="messages"></span>
</div>
<label class="col-sm-2 col-form-label">Image</label>
<div class="col-sm-4">

<input type="file" class="form-control" name="image">
<img src="uploadImage/Profile/<?php echo $image; ?>" style="width: 200px;height: 200px;">
<input type="hidden" value="<?php echo $image;?>"  name="old_image">

<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" name="btn_update" class="btn btn-primary m-b-0">Update</button>
</div>
</div>
</form>
</div>
</div>


<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->

<?php include('footer.php');?>