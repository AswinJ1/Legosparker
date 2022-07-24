<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');


 
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
<h4>Between Dates Reports</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Between Dates Reports</a>
</li>
<li class="breadcrumb-item"><a href="bwdates-report-ds.php">Between Dates Reports</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

    <div class="card">
                            <div class="card-header">
                                <strong>Between Dates </strong> Reports
                            </div>
                               <div class="card-body">
                        <?php
                        $fdate=$_POST['fromdate'];
                        $tdate=$_POST['todate'];

                        ?>
                        <h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>S.NO</th>
                                            <th>Parking Number</th>
                                            <th>Owner Name</th>
                                            <th>Vehicle Reg Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </tr>
                            </thead>
                            <?php
                            $ret=mysqli_query($conn,"select *from   tblvehicle where date(InTime) between '$fdate' and '$tdate'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {
                            ?>
                    
                            <tr>
                                <td><?php echo $cnt;?></td>
                                
                                <td><?php  echo $row['ParkingNumber'];?></td>
                                <td><?php  echo $row['OwnerName'];?></td>
                                <td><?php  echo $row['RegistrationNumber'];?></td>
                                
                                <td><a href="view-incomingvehicle-detail.php?viewid=<?php echo $row['ID'];?>"class="btn btn-xs btn-primary"><i class="feather icon-clock m-t-10 f-16 " ></i></a></td>
                            </tr>
                            <?php 
                            $cnt=$cnt+1;
                            }?>
                    </table>

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