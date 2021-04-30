<!-- <?php
	
	$command = escapeshellcmd("C:\Users\Asus\AppData\Local\Programs\Python\Python36-32\python.exe test.py");
    $output = shell_exec($command);

    echo $output;
?> -->
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js">
    	
    </script>
</head>

<body>
	<form method='post' action='main.php'>
		City: <input type='text' name='city'/> 
		Age: <input type='text' name='age'/> 
		Gender: <input type='text' name='gender'/> 
		<input type='submit' value='Show'>
	</form>
 <canvas id="myChart2" height="300" width="500"></canvas>

<script type="text/javascript">
<?php
	$city = $_POST['city'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$command = escapeshellcmd("C:\Users\Asus\AppData\Local\Programs\Python\Python36-32\python.exe test.py '".$city." '".$age." ".$gender);
    $output = shell_exec($command);

    // echo $output;
?>
var zz = "<?php echo $output; ?>"
bmi = zz.split('#')
	bmiLabels = bmi[0].split(',')
bmiLabelsCount = bmi[1].split(',')
console.log(bmiLabels)
console.log(bmiLabelsCount)
var chartData = {

    // labels: ["January", "February", "March", "April", "May", "June"],
    labels: bmiLabels,
    datasets: [
        {
            fillColor: "#79D1CF",
            strokeColor: "#79D1CF",
            // data: [60, 80, 81, 56, 55, 40]
            data: bmiLabelsCount
        }
    ]



};

var barOptions = {

 scales: {
            yAxes: [{
                barThickness: 2,  // number (pixels) or 'flex'
                maxBarThickness: 2 // number (pixels)
            }]
        },
  
  events: false,
  showTooltips: false,
  animation: {
    duration: 500,
     
    easing: "easeOutQuart",


    onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
        ctx.textAlign = 'left';
        ctx.textBaseline = 'bottom';
        
        this.data.datasets.forEach(function (dataset) {
            console.log(dataset);
            for (var i = 0; i < dataset.data.length; i++) {
                var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                    scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                    left = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.left;
                    offset = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.longestLabelWidth;
                ctx.fillStyle = '#444';
                var y_pos = model.y - 5;
                var label = model.label;
                // Make sure data value does not get overflown and hidden
                // when the bar's value is too close to max value of scale
                // Note: The y value is reverse, it counts from top down
                if ((scale_max - model.y) / scale_max >= 0.93)
                    y_pos = model.y + 20; 
                // ctx.fillText(dataset.data[i], model.x, y_pos);
                ctx.fillText(label, left + 10, model.y + 8);
            }
        });               
    }
  }

};

var ctx = document.getElementById("myChart2").getContext("2d");
var myBar = new Chart(ctx, {
                type: 'horizontalBar',
                data: chartData,
                options: barOptions
            });



            </script>


</body>
</html>