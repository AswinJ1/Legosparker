<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar1.php');?>
<?php include('connect.php');


 
if(isset($_POST['submit']))
  {
    $parkingnumber=mt_rand(100000000, 999999999);
    $catename=$_POST['catename'];
     $vehcomp=$_POST['vehcomp'];
    $vehreno=$_POST['vehreno'];
    $ownername=$_POST['ownername'];
    $ownercontno=$_POST['ownercontno'];
    $enteringtime=$_POST['enteringtime'];
    
     
    $query=mysqli_query($conn, "insert into  tblvehicle(ParkingNumber,VehicleCategory,VehicleCompanyname,RegistrationNumber,OwnerName,OwnerContactNumber) value('$parkingnumber','$catename','$vehcomp','$vehreno','$ownername','$ownercontno')");
    if ($query) {
echo "<script>alert('Vehicle Entry Detail has been added');</script>";
echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
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
<h4>Parking Status</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Parking Status</a>
</li>
<li class="breadcrumb-item"><a href="search_v.php">Lagos Parking Status</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<div class="page-body">

<div class="card">
                        <div class="card-header">
                            <strong class="card-title">Parking Status</strong>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="search">
                                <p style="font-size:16px; color:red" align="center"> 
                                    <?php if(isset($msg)){
                                    echo $msg;
                                    }  ?> 
                                </p>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Search By Parking Number</label></div>
                                    <div class="col-12 col-md-9">
									
									
									<select type="text" class="form-control" name="parknumber" id="parknumber" required="">
<option value="0">Select Parking Number</option>
<?php $query=mysqli_query($conn,"select * from tblvehicle");
while($row=mysqli_fetch_array($query))
{
  ?>    
 <option value="<?php echo $row['ParkingNumber'];?>"><?php echo $row['ParkingNumber'];?></option>
 <?php } ?>
</select>
									
									
								<!--	<input type="text" id="searchdata" name="searchdata" class="form-control"  required="required" autofocus="autofocus" >-->
									
									
									
									</div>
                                </div> 
                                <p style="text-align: center;"> <button type="submit" class="btn btn-primary m-b-0" name="search" >Search</button></p>
                            </form>

                            <?php
                            if(isset($_POST['search']))
                            { 

                            $sdata=$_POST['parknumber'];
                            ?>
                            <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 
                            <table class="table">
                                <thead>
                                    <tr>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Parking Number</th>
                                            <th>Owner Name</th>
                                            <th>Vehicle Reg. Number</th> 
                                           
                                        </tr>
                                    </tr>
                                </thead>
                                <?php
                                $ret=mysqli_query($conn,"select *from   tblvehicle where ParkingNumber like '$sdata%'");
                                $num=mysqli_num_rows($ret);
                                if($num>0){
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {

                                ?> 
                                <tr>
                                <td><?php echo $cnt;?></td>
                            
                                
                                <td><?php  echo $row['ParkingNumber'];?></td>
                                <td><?php  echo $row['OwnerName'];?></td>
                                <td><?php  echo $row['RegistrationNumber'];?></td>
                                
                                
                                </tr>
                                <?php 
                                $cnt=$cnt+1;
                                } } else { ?>
                                    <tr>
                                    <td colspan="8"> No record found against this search</td>

                                </tr>
                                
                                <?php } }?>
                            </table>

                        </div>
                    </div>


</div>

</div>
</div>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php"); ?>