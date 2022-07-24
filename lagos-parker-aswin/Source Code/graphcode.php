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
labels: ["Insan Mizaçlari","Diabetes Support","Collagen Plus","Osteo Healths","Gastro Healths","Memory Plus","Anti Plus Spray","Detox plus","Dezenfeksiyon","Bee Propolis","Anti Plus","Seasame Oil","Royal Jelly","Collagen Soap","Natural Organic Honey","Rest Oil","Collagen Shampoo","Heart Health ","Skin Health",],
datasets: [{
backgroundColor: ["#B5E128","#03B71F","#D86237","#CB4031","#CE0D92","#089EAB","#47EC3B","#8B5DA2","#BD6E45","#D9BA74","#560FAC","#5A40BD","#7126A0","#F39BE5","#A38F09","#A3021D","#382F4D","#A5F91B","#E930A8",],
data: [764,38,36,31,29,27,27,26,25,19,6,5,4,2,2,1,1,1,1,]
}]
}
});
</script>