<html>
<head>
<title>HI!</title>
</head>
<body>
<h1>HI!</h1>
<hr>
<pre><?php

echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? "YAY! SSL!" : "NON-SSL";
echo "\n\n";

?></pre>

<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') { ?>
	<hr />
	<pre><?php phpinfo(); ?></pre>
<?php } else {
		throw new Exception('not ssl');
	}
?>

</body>
</html>
