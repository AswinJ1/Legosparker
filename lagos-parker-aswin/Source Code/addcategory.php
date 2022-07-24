<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');


 if(isset($_POST['submit']))
    {
         $catname=$_POST['catename'];
		 $catrate=$_POST['rate'];
       
        $query=mysqli_query($conn,"insert into tblcategory (VehicleCat,rate) value('$catname','$catrate')");
        if ($query) {
echo "<script>alert('Vehicle Category Entry Detail has been added');</script>";
echo "<script>window.location.href ='manage-category.php'</script>";
  }
  else
    {
     echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
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
<h4>Add Categories</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Vehicle Category</a>
</li>
<li class="breadcrumb-item"><a href="addcategory">Add Categories</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form role="form" method="post">

    <div class="form-group row">
        <label class="col-lg-2">Category</label>
        <input class="form-control col-lg-6" name="catename" placeholder="Vehicle Category" required="true">
        <br>
    </div>
	<div class="form-group row">
        <label class="col-lg-2">Rate</label>
        <input class="form-control col-lg-6" name="rate" placeholder="Category Rate" required="true">
        <br>
    </div>
        <div class="col-lg-12">
      <button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
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