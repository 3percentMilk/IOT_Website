<!DOCTYPE html>
<html>
<head>
	<title>Ambilamp</title>
	<link rel="stylesheet" type="text/css" href="assets/css/details.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
</head>
<body>

<?php
	include "header.php";
?>

<!-- BUTTONS AND CANVASES -->
<input type="button" id = " temp-btn" class= "btn" value = "View Temperature Chart" onclick="drawTemp()">
<canvas id="temp-chart-long" class= "chart" width="900" height="350" hidden></canvas>
<input type="button" id = " sound-btn" class= "btn" value = "View Sound Chart" onclick="drawSound()">
<canvas id="sound-chart-long" class= "chart" width="900" height="350" hidden></canvas>

<!-- TABLES -->
<div id="tables-container">
	<div class="table">
		<table id="temp-table">
			<tr>
			    <th>Firstname</th>
			    <th>Lastname</th> 
			    <th>Age</th>
			</tr>
			<tr>
			    <td>This</td>
			    <td>Is</td>
			    <td>FAKE</td>
			</tr>
			<tr>
			    <td>This</td>
			    <td>Is</td>
			    <td>FAKE</td>
			</tr>
			<tr>
			    <td>This</td>
			    <td>Is</td>
			    <td>FAKE</td>
			</tr>
		</table>
 	</div>
 	<div class="table">
 		<table id="sound-table">
 			<tr>
			    <th>Firstname</th>
			    <th>Lastname</th> 
			    <th>Age</th>
			</tr>
			<tr>
			    <td>This</td>
			    <td>Is</td>
			    <td>FAKE</td>
			</tr>
			<tr>
			    <td>This</td>
			    <td>Is</td>
			    <td>FAKE</td>
			</tr>
			<tr>
			    <td>This</td>
			    <td>Is</td>
			    <td>FAKE</td>
			</tr>	
 		</table>

 	</div>
 </div>
<script type="text/javascript" src="assets/js/details.js"></script>
</body>
</html>