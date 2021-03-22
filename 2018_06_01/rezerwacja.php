<?php
	$connect=mysqli_connect('localhost','root','','baza2018') or die ("Błąd połączenia!")
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Restauracja Wszystkie Smaki</title>
		<link rel="Stylesheet" href="styl1.css">
	</head>


	<body>
		<div id="baner">
		<h1>Witamy w restauracji "Wszystkie Smaki"</h1>
		</div>
		
		<div id="lewy">
		<img src="menu.jpg" alt="Nasze danie">
		</div>
		
		<div id="prawy">
		<h4>U nas dobrze zjesz!</h4>
		<ul>
			<li>Obiady do 40zł</li>
			<li>Przekąski od 10zł</li>
			<li>Kolacje od 20zł</li>
		</ul>
		</div>
		
		<div id="dolny">
		<?php
			$data = $_POST['data'];
			$osoby = $_POST['osoby'];
			$telefon = $_POST['telefon'];
			
			$q=mysqli_query($connect,"INSERT INTO `rezerwacje`(`data_rez`, `liczba_osob`, `telefon`) VALUES ('$data',$osoby,$telefon)");
			
			echo("Dodano rezerwacje do bazy");

			mysqli_close($connect);
		?>
		</div>
		
		<div id="stopka">
		Stronę internetową opracował: <i>00000000000</i>
		</div>
	
	</body>
</html>