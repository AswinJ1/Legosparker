 <?php 
 include('connect.php');
  $sql = "select * from admin where id = '".$_SESSION["id"]."'";
        $result=$conn->query($sql);
        $ro=mysqli_fetch_array($result);
       
            $q = "select * from tbl_permission_role where role_id='".$ro['role_id']."'";
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

 ?>


<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigatio-lavel">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
   
<li class="">
<a href="index-user.php">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">Dashboard</span>
</a>
</li>


<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="fa fa-user"></i></span>
<span class="pcoded-mtext">Manage Profile</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="profile-user.php">
<span class="pcoded-micon"><i class="fa fa-plus"></i></span>
<span class="pcoded-mtext">Edit Profile</span>
</a>
</li>
<li class="">
<a href="changepassword-user.php">
<span class="pcoded-mtext">Change Password</span>
</a>
</li>

</ul>

</li>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->


<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="fa fa-bars"></i></span>
<span class="pcoded-mtext">View Category</span>
</a>
<ul class="pcoded-submenu">

<li class="">
<a href="view-category.php">
<span class="pcoded-mtext">View Categories</span>
</a>
</li>

</ul>

</li>



<li class="">
<a href="add-vehicle-user.php">
<span class="pcoded-micon"><i class="fa fa-automobile"></i></span>
<span class="pcoded-mtext">Vehicle Entry</span>
</a>
</li>
<li class="">
<a href="view-vehicle-user.php">
<span class="pcoded-micon"><i class="fa fa-automobile"></i></span>
<span class="pcoded-mtext">View Vehicles</span>
</a>
</li>



<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<li class="">
<a href="search_v-user.php">
<span class="pcoded-micon"><i class="feather icon-search"></i></span>
<span class="pcoded-mtext">Parking Status</span>
</a>
</li>

<?php if(isset($useroles)){  if(in_array("settings",$useroles)){ ?>
<li class="">
<a href="setting.php">
<span class="pcoded-micon"><i class="fa fa-cogs"></i></span>
<span class="pcoded-mtext">Settings</span>
</a>
</li>
<?php } } ?>

<!--<li class="">
<a href="portfolio.php" aria-expanded="false">
<span class="pcoded-micon"><i class="fa fa-product-hunt"></i></span>
<span class="pcoded-mtext">More Projects!</span>
</a>
</li>

<li class="">
<a href="about.php" aria-expanded="false">
<span class="pcoded-micon"><i class="fa fa-info-circle"></i></span>
<span class="pcoded-mtext">About Author!</span>
</a>
</li>
-->
<li class="">
<a href="logout-user.php">
<span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
<span class="pcoded-mtext">Logout</span>
</a>
</li>


<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
</ul>
</div>
</nav>

