<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['submit']))
    {
        $aid=$_SESSION['vpmsaid'];
        $pnumber=$_POST['pnumber'];
		 $oname=$_POST['oname'];
		  $rnumber=$_POST['rnumber'];
    $eid=$_GET['viewid'];
    
        $query=mysqli_query($conn, "update tblvehicle set OwnerName='$oname', RegistrationNumber= '$rnumber' where ParkingNumber='$pnumber'");
        if ($query) {
        $msg="Booking has been updated.";
    }
    else
        {
        $msg="Something Went Wrong. Please try again";
        }

    }
	
	
	if(isset($_POST['delete']))
    { $aid=$_SESSION['vpmsaid'];
        $pnumber=$_POST['pnumber'];
		 $oname=$_POST['oname'];
		  $rnumber=$_POST['rnumber'];
    $eid=$_GET['viewid'];
    
        $query=mysqli_query($conn, "delete from tblvehicle where ParkingNumber='$pnumber' and OwnerName= '$oname' and RegistrationNumber='$rnumber'");
        if ($query) {
        $msg="Booking has been deleted.";
    }
    else
        {
        $msg="Something Went Wrong. Please try again";
        }

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
<h4>Vehicle Category</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Manage Booking</a>
</li>
<li class="breadcrumb-item"><a href="edit-category.php">edit-Booking</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<a href="view-vehicle-user.php">Back</a>
<div class="card">
<div class="card-block">
<form role="form" method="post">
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <p style="font-size:16px; color:red" align="center"> <?php if(isset($msg)){
                                        echo $msg;
                                    }  ?> </p>
                                                        
                                    <?php
                                    $cid=$_GET['viewid'];
                                    $ret=mysqli_query($conn,"select * from  tblvehicle where ParkingNumber='$cid'");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {

                                    ?>
    <div class="form-group row">
        <label class="col-lg-2">Parking Number</label>
        
        <input type="text" id="pnumber" name="pnumber" class="form-control col-lg-6" placeholder="Parking Number" required="true" value="<?php  echo $row['ParkingNumber'];?>">
        <br>
    </div>
	<div class="form-group row">
        <label class="col-lg-2">Owner Name</label>
        
        <input type="text" id="oname" name="oname" class="form-control col-lg-6" placeholder="Owner Name" required="true" value="<?php  echo $row['OwnerName'];?>">
        <br>
    </div>
	<div class="form-group row">
        <label class="col-lg-2">Registration Number</label>
        
        <input type="text" id="rnumber" name="rnumber" class="form-control col-lg-6" placeholder="Registration Number" required="true" value="<?php  echo $row['RegistrationNumber'];?>">
        <br>
    </div>
    <?php } ?>
        <div class="col-lg-12">
      <button type="submit" name="submit" class="btn btn-primary m-b-0">Update</button> 	   <button type="submit" name="delete" class="btn btn-primary m-b-0">Delete</button>
    </div>
	 
</form>
</div>
</div>


</div>

</div>
</div>

<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php include("footer.php"); ?>