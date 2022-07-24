
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
 <?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar1.php');?>
<?php include('connect.php');?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>View Category</h4>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="profile-user.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Vehicle Category</a>
</li>
<li class="breadcrumb-item"><a href="view-category.php">View Category</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">

<div class="card-block">
<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>S.NO</th>
 <th>Category</th> 
<th>Rate/Hour</th>
</tr>
</thead>
<?php
$ret=mysqli_query($conn,"select *from  tblcategory");
$cnt=1;
 while ($row=mysqli_fetch_array($ret)) {
?>
<tbody>
  <tr>
        	<td><?php echo $cnt;?></td>
            <td><?php  echo $row['VehicleCat'];?></td>
            
            <td> <?php  echo $row['rate'];?>       </td>  

        </tr>
    
</tbody>
 <?php 
                                    $cnt=$cnt+1;
                                    }?>
</table>
</div>
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

<?php include('footer.php');?>
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h3>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
    <?php echo "<script>setTimeout(\"location.href = 'manage-category.php';\",1500);</script>"; ?> 
      <button class="button button--success" data-for="js_success-popup">Close</button> 
    </p>
  </div>
</div>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php unset($_SESSION["success"]);  
 ?>
<?php } ?>

    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>