<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento senza titolo</title>
</head>

<body>
<?
	$conn = mysqli_connect('192.168.1.2', 'testUSER', 'piramide', 'accessman');
	if ($conn)
	{
		echo 'CONNESSO';
	}
	// yeah
	?>
</body>
</html>