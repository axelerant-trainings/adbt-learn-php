<!DOCTYPE html>

<?php
 setcookie("language", "fr", time() + 20);
?>
<html>

<body>
	<?php
	echo "Preferred language is " . $_COOKIE["language"];
	?>

	<p>
		<strong>Note:</strong>
		You might have to reload the page
		to see the value of the cookie.
	</p>

</body>

</html>
