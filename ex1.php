<?php
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	echo "Cette page a été appelée par la méthode GET <br />";
	$tab=$_GET;
}
else
{
	echo "Cette page a été appelée par la méthode POST <br />";
	$tab=$_POST;
}

if (count($tab)>0)
{
	echo "Données reçues : <pre>";
	print_r($tab);
	echo "</pre><br />";
}
else
{
	echo "Aucune donnée reçue";
}

// pour éviter les soucis avec des configurations de php utilisant les tags courts
echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- **** H E A D **** -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="style/main.css" charset="utf-8">
</head>
<!-- **** F I N **** H E A D **** -->


<!-- **** B O D Y **** -->
<body>

	<form action="ex1.php" method="get">
		<fieldset>
			<legend class="field">Name</legend>
			<input class="field" type="text" name="name"/>
			<legend class="field">Gender</legend>
			<label class="info" for="male">Male
			<input class="fieldGender" id ="male" type="radio" name="gender" value="male"></label>
			<label class="info" for="female">Female
			<input class="fieldGender" id ="female" type="radio" name="gender" value="female"></label>
			<label class="info" for="other">Other
			<input class="fieldGender" id ="other" type="radio" name="gender" value="other"></label>
			<legend class="field">Promo</legend>
			<select class="field" name="promo">
			  <option value="p1">p1</option>
			  <option value="p2">p2</option>
			  <option value="p3">p3</option>
			  <option value="p4">p4</option>
			</select>
			<legend>You're passionnate in:</legend>
			<label class="field">Node.js<input  type="checkbox" name="techno1" value="Node.js"></label>
			<label class="field">Bootstrap<input  type="checkbox" name="techno2" value="Bootstrap"></label>
			<label class="field">Mongodb<input  type="checkbox" name="techno1" value="Mongodb"></label>
			<label class="field">Jade<input  type="checkbox" name="techno2" value="Jade"></label>
			<legend class="field">Cilck to submit</legend>
			<input type="submit" />
		</fieldset>
	</form>

	<!--
	http://www.compatt.com/lab/IandA/IandA_00-00-02.htm
	One of the basic "theoretical" advantages of SVG graphics on the web is being
	able to use one graphics file in multiple locations and multiple sizes on a
	web page as well as site wide with little or no loss of detail or image quality.
	In the example below the difference in file size between the vector and raster versions
	of the image is only 0.41% and the vector version is the larger of the two.

	both can be used by <img> or background-image, nevertheless svg is better for large image.
 -->

</body>
<!-- **** F I N **** B O D Y **** -->

</html>
