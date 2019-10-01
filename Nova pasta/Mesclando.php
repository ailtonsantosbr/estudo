<<!DOCTYPE html>
<html>
<head>
	<title>Mesclando entre os modos PHP e HTML</title>
</head>
<body>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
	?>
	<H3>strpos() must have returned non-false</H3>
	<p> you are using internet explorer</p>
	<?php
} else {
	?>
	<h3> strpos() must have returned false</h3>
	<p> You are not using Internet Explorer</p>
	<?php
}
?>

}
</body>
</html>