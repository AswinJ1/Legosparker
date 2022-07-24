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
<li class="breadcrumb-item"><a>Reports</a>
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
                            <div class="card-body card-block">
                                <form action="bwdates-reports-details.php" method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatesreport">
                                    <p style="font-size:16px; color:red" align="center"> <?php if(isset($msg)){
                                        echo $msg;
                                    }  ?> </p>
                                                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">From Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" name="fromdate" id="fromdate" class="form-control" required="true"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">To Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" name="todate"  class="form-control" required="true"></div>
                                    </div>
                                   
                                   
                                  
                                    
                                    
                                   <p style="text-align: center;"> <button type="submit" class="btn btn-primary m-b-0" name="submit" >Submit</button></p>
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