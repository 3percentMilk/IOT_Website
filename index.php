
<!DOCTYPE html>
<html>
<head>
	<title> Ambilamp</title>
	<link rel="stylesheet" type = "text/css" href = "index.css">
	<script src= "jscolor.js"></script>
</head>


<body>

<?php
	include "GPIO.php";
	include "header.php";
	$color = "EFFFC9";
	if(isset($_POST['set_color'])){
		$color = $_POST['color'];
	}



?>


<!-- JSCOLOR PICKER -->
<input type ="button" class=" jscolor" id="picker" onchange = "update(this.jscolor)" onfocusout = "apply()" 
value = <?php echo "'" . $color . "'";  ?>

<!-- FORM -->
<form method = "POST">
	<input type= "text" id= "color" name= "color">
	<input type="submit" id= "smt" name="set_color" hidden>
	<input type="submit" value="Set as Default" id ="set-default">
</form>

<!-- Charts -->
<div id= "charts-container">
	<canvas id ="temp-chart" class ="chart" width="" ="550" height="" = "350"></canvas>
	<canvas id ="sound-chart" class ="chart" width="" ="550" height="" = "350"></canvas>
</div>

<!-- About -->
<div id ="about">
	<h1> About </h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan nec sem eu tempor. Maecenas quis egestas erat. Maecenas vel nisi quis metus sagittis mattis. Etiam volutpat viverra sapien a lobortis. Nunc ex magna, posuere at pulvinar dignissim, egestas a turpis. In hac habitasse platea dictumst. Aliquam a dapibus leo. Morbi ipsum justo, semper sollicitudin eros id, varius porta lacus. In eu maximus enim. Nam in lorem ut quam mollis tincidunt. </p>

	<p>Vestibulum maximus nibh sit amet sapien condimentum, elementum dapibus magna vulputate. Praesent efficitur sit amet neque nec consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat vulputate nulla, in varius enim imperdiet vel. Phasellus libero sapien, lacinia id lectus eu, ornare hendrerit tellus. Sed aliquam orci ut felis aliquet blandit. Maecenas porttitor dolor non pretium maximus. Donec lorem ante, elementum eu tortor in, aliquet lacinia nulla. Aliquam maximus hendrerit ipsum. Duis non posuere augue. Donec mollis felis vel erat ullamcorper, quis porttitor lectus tempor. Proin facilisis tortor viverra, convallis justo eget, venenatis elit. Aenean tempor placerat luctus. Nunc tempor eros ut sem euismod, at aliquet est facilisis. Nullam ac justo lacus.</p>

	<p>Donec nec magna quis metus ultricies tempus vitae eu dolor. Fusce non auctor magna. Fusce condimentum quis sem vitae accumsan. Mauris non tincidunt nunc. Quisque ultricies odio quis magna aliquam blandit. Ut augue urna, egestas quis ex eu, vehicula lobortis nunc. Praesent arcu justo, placerat id ipsum sit amet, ultrices feugiat ex. Donec id dolor tempus diam mollis rhoncus. Integer finibus scelerisque laoreet. Nunc sollicitudin ex et dui malesuada sollicitudin. Donec faucibus neque id mauris hendrerit, at laoreet metus condimentum. Vivamus efficitur ligula a orci maximus bibendum. Aenean ultrices odio at erat ornare venenatis. Sed pellentesque tempus lacus quis faucibus.</p>

	<p>Nulla hendrerit finibus felis. Nunc id lectus et nulla condimentum pharetra at nec neque. Donec elementum purus porttitor lorem varius vestibulum. Aenean malesuada sit amet tellus sit amet placerat. Praesent consectetur condimentum ullamcorper. In nibh ex, malesuada imperdiet porttitor vitae, placerat at turpis. Quisque fringilla magna vel commodo blandit. Aenean ut tellus tempor, mattis nisi sit amet, iaculis enim. Suspendisse vehicula tincidunt nisl, interdum dapibus lorem rutrum quis. Aenean consectetur lacinia odio, ultricies pharetra felis tincidunt non. Vestibulum vel lorem eros. Sed vulputate erat vel massa sodales elementum. Maecenas ultrices quis lectus eget iaculis.</p>

	<p>Sed interdum felis est, vel semper massa luctus in. Morbi varius imperdiet ligula vel volutpat. Aliquam erat volutpat. Donec rhoncus varius dolor sed mollis. Vivamus commodo commodo nulla at sagittis. Morbi fringilla nisi vitae dui iaculis, vel imperdiet nibh tempor. Nullam consectetur ligula quis metus aliquet porta. Sed elit ipsum, laoreet quis lacus sit amet, ultricies hendrerit nulla. In non risus ultrices, faucibus tellus quis, rhoncus arcu. In id odio mi. Proin condimentum, lacus at condimentum convallis, augue orci maximus urna, at consectetur nisl nunc vehicula augue. Pellentesque risus arcu, eleifend quis sapien rutrum, sollicitudin ornare ligula. Quisque eu eleifend lectus, quis porttitor massa. Integer interdum risus ut pulvinar iaculis. Duis ullamcorper mollis tincidunt. Cras consequat cursus est, id accumsan lorem ullamcorper eu.</p>

</div>



<script type="text/javascript" src="index.js"></script>
</body>
</html>
