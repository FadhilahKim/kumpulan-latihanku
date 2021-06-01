<!DOCTYPE html>
<html>
<head>
	<title>grafik</title>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/highcharts.js" type="text/javascript"></script>
	<script type="text/javascript">
		var chart1; //globally available
	$(document).ready(function() {
		chart1 = new Highcharts.Chart({
			chart: {
				renderTo: 'container',
				type: 'column'
			},
			title: {
				text: 'Grafik Penjualan'
			},
			xAxis: {
				categories: ['merek']
			},
			yAxis: {
				title: {
					text: 'Jumlah Terjual'
				}
			},
				 series:
				{
				<?php 
				include('config.php');
				$sql = "SELECT merek FROM penjualan";
				$query = mysqli_query($sql) or die(mysqli_error());
				while ($ret = mysqli_fetch_array($query)) {
					$merek = $ret['merek'];
					$sql_jumlah = "SELECT jumlah FROM penjualan WHERE merek = '$merek'";
					$query_jumlah = mysqli_query($sql_jumlah) or die(mysqli_error());
					while ($data = mysqli_fetch_array($query_jumlah)) {
						$jumlah = $data['jumlah'];
					}
					?>
					{
						name: '<?php echo $merek ?>',
						data: [<?php echo $jumlah; ?>]
					},
					<?php } ?>
				}
		});
	});
	</script>
</head>
<body>
	<div id="container"></div>
</body>
</html>