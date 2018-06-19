<?php
$time = filter_out($_POST['time']);
$city = filter_out($_POST['city']);
$date = filter_out($_POST['date']);

$city = str_replace(' ','_',$city);
 
$link = "http://api.wunderground.com/api/9e2010964e7aa940/conditions/q/CA/" . $city . ".json";

function filter_out($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!doctype html>
<html lang="en">
	<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		var simple = '<?php echo $link; ?>';
		$.getJSON(simple,get_weather_data);
		
		function get_weather_data(weatherdata){
				$('#demo').html('Temperature: ' + weatherdata.current_observation.temp_c + "<br/> Weather: " + weatherdata.current_observation.weather);
				}
	</script>
	</head>
	<body onload='data_fetch()'>
		<p id='demo'> </p>
	</body>
</html>


