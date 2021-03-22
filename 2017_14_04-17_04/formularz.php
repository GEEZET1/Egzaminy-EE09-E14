<html>
<head>
	<meta charset='utf-8'>
	<title>Sklep muzyczny</title>
	<link rel='Stylesheet' href='muzyka.css'>
</head>
<body>
	<div id='baner'>
		<h1>SKLEP MUZYCZNY</h1>
	</div>
	<div id='lewy'>
		<h2>NASZA OFERTA</h2>
		<ol>
			<li>Instrumenty muzyczne</li>
			<li>Sprzęt audio</li>
			<li>Płyty CD</li>
		</ol>
	</div>
	<div id='prawy'>
		<?php
		$connect = mysqli_connect('localhost', 'root', '', 'sklep') or die ('Błąd połączenia');
		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		echo "Konto $imie $nazwisko";
		mysqli_close($connect);
		?>
	</div>
</body>
</html>
