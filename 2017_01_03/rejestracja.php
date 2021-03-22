<?php
$connect=mysqli_connect('localhost','root','','forum') or die ("Błąd połączenia")
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Nasze hobby</title>
		<link rel="Stylesheet" href="hobby.css">
	</head>
	
	<body>
		<div id="baner">
			<h1>FORUM HOBBYSTYCZNE</h1>
		</div>
		
		<div id="lewy">
			<?php
			$nick = $_POST['nick'];

			echo("Konto $nick zostało zarejestrowane na forum hobbtystycznym")
			?>
		</div>
		
		<div id="prawy">
			<h3>TEMATYKA FORUM</h3>
			<ul>
				<li>Hodowla zwierząt</li>
					<ul>
						<li>psy</li>
						<li>koty</li>
					</ul>
				<li>Muzyka</li>
				<li>Gry Komputerowe</li>
			<ul>
		</div>
	</body>

</html>
<?php
mysqli_close($connect)
?>