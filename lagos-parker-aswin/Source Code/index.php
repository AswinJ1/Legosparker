
<!DOCTYPE html>
<html lang="en">
<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>


                   <br>
                      <!--  <marquee scrollamount=4><b>Alert : Don't Sale or Publish this script with your name. However you can use it for Academic Purpose !</b></marquee>-->
                  
                
 <?php 
 include('connect.php');
  $sql = "select * from admin where id = '".$_SESSION["id"]."'";
        $result=$conn->query($sql);
        $row1=mysqli_fetch_array($result);
       
            $q = "select * from tbl_permission_role where role_id='".$row1['role_id']."'";
            $ress=$conn->query($q);
            //$row=mysqli_fetch_all($ress);
             $name = array();
            while($row=mysqli_fetch_array($ress)){
          $sql = "select * from tbl_permission where id = '".$row['permission_id']."'";
        $result=$conn->query($sql);
        $row1=mysqli_fetch_array($result);
             array_push($name,$row1[1]);
             }
             $_SESSION['name']=$name;
             $useroles=$_SESSION['name'];

$ret=mysqli_query($conn,"select count(ID) as id4 from tblvehicle");
 $row4=mysqli_fetch_array($ret);  

$ret=mysqli_query($conn,"select count(ID) as id1 from tblvehicle where VehicleCategory='Two Wheeler Vehicle'");
 $row=mysqli_fetch_array($ret);  
 //echo $row;exit;                
$ret=mysqli_query($conn,"select count(ID) as id2 from tblvehicle where VehicleCategory='Four Wheeler Vehicle'");
 $row2=mysqli_fetch_array($ret); 

 $ret=mysqli_query($conn,"select count(ID) as id3 from tblvehicle where VehicleCategory='Bicycles'");
 $row3=mysqli_fetch_array($ret); 

 $ret=mysqli_query($conn,"select count(ID) id1 from   tblvehicle where Status=''");
$row5=mysqli_fetch_array($ret);

$ret=mysqli_query($conn,"select count(ID) id2 from   tblvehicle where Status='Out'");
 $row6=mysqli_fetch_array($ret);
 ?>   

<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper full-calender">
<div class="page-body">
<div class="row">


<?php if(isset($useroles)){  if(in_array("clients_statistics",$useroles)){ ?>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-green update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row4['id4']; ?></h4>
<h6 class="text-white m-b-0">Parked Vehicle</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-2" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>
<?php } } ?> 

<?php if(isset($useroles)){  if(in_array("invoices_statistics",$useroles)){ ?>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-pink update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row['id1']; ?></h4>
<h6 class="text-white m-b-0">Two Wheeler Vehicle</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-3" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>
<?php } } ?> 



<div class="col-xl-3 col-md-6">
<div class="card bg-c-lite-green update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row2['id2']; ?></h4>
<h6 class="text-white m-b-0">Four Wheeler Vehicle</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-4" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>


<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php if(isset($useroles)){  if(in_array("repairs_statistics",$useroles)){ ?>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-yellow update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row3['id3']; ?></h4>
<h6 class="text-white m-b-0">Bicycles</h6>
 </div>
<div class="col-4 text-right">
<canvas id="update-chart-1" height="50"></canvas>

</div>
</div>
</div>
</div>
</div>
<?php } } ?> 

<div class="card col-xl-7 col-md-6 m-t-3">
  
<div class="table-responsive dt-responsive m-t-50">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
<tr>
                                            <th>S.NO</th>
                                            <th>Parking Number</th>
                                            <th>Owner Name</th>
                                            <th>Vehicle Reg Number</th> 
                                            
                                        </tr>
</thead>
 <?php
                                $ret=mysqli_query($conn,"select *from   tblvehicle where Status=''");
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {
                                ?> 
<tbody>
  <tr>
            <td><?php echo $cnt;?></td> 
                                    <td><?php  echo $row['ParkingNumber'];?></td>
                                    <td><?php  echo $row['OwnerName'];?></td>
                                    <td><?php  echo $row['RegistrationNumber'];?></td> 
                                    
        </tr>
    
</tbody>
 <?php 
                                $cnt=$cnt+1;
                                }?>
</table>
</div>
</div>
<div class="card col-xl-5 col-md-6 ">
  <div class="card-header">
  <h3>Parking Status Graph</h3>
  </div> 
    <div class="container m-t-50" id="invoice">
<div>
<canvas id="myChart" style="margin-top:5%;"></canvas>
</div>
</div>
</div>







</div>
</div>
</div>
</div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js'></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: ["InTime","OutTime"],
datasets: [{
backgroundColor: ["#47EC3B","#8B5DA2"],
data: [<?php echo $row5['id1']; ?>,<?php echo $row6['id2']; ?>]
}]
}
});
</script>

<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->

<?php include('footer.php');?>

