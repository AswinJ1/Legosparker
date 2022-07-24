<?php include('connect.php');

 $ret=mysqli_query($conn,"select count(ID) id1 from   tblvehicle where Status=''");
$row4=mysqli_fetch_array($ret);

$ret=mysqli_query($conn,"select count(ID) id2 from   tblvehicle where Status='Out'");
 $row5=mysqli_fetch_array($ret);
 //$total=$row4 + $row5;
 //print_r($row5) ;exit;
?>

<div class="container" id="invoice">
<div>
<canvas id="myChart"></canvas>
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
data: [<?php echo $row4['id1']; ?>,<?php echo $row5['id2']; ?>]
}]
}
});
</script>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->




