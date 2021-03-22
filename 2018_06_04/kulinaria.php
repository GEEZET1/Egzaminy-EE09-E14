<?php
$connect = mysqli_connect('localhost', 'root','', 'baza') or die("Błąd połączenia")
?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Restauracja Kulinaria.pl</title>
	<link rel="stylesheet" href="styl4.css">
	</head>
	
	<body>
	
	<div id="baner">
	 <h2>Restauracja Kulinaria.pl Zaprasza!</h2>
	</div>
	
	<div id="panel_lewy">
	<p>Dania mięsne zamówisz już od <?php $q=mysqli_query($connect,"SELECT MIN(cena) from dania where typ=2");
			$dane=mysqli_fetch_assoc($q);
            echo $dane['MIN(cena)'];?> złotych</p>
	<img src="menu.jpg" alt="Pyszne spaghetti"></br>
	<a href="menu.jpg">Pobierz Obraz</a>
	</div>
	
	<div id ="panel_srodkowy">
	<h3>Przekąski</h3>
		<?php $q=mysqli_query($connect,"SELECT id,nazwa,cena from dania where typ=3");
			  while($dane=mysqli_fetch_assoc($q))
				echo '<p>'.$dane['id'].' '.$dane['nazwa'].' '.$dane['cena'].' PLN '.'</p>';
		?>
	</div>
	
	<div id="panel_prawy">
	<h3>Napoje</h3>
		<?php $q=mysqli_query($connect,"SELECT id,nazwa,cena from dania where typ=4");
				  while($dane=mysqli_fetch_assoc($q))
					echo '<p>'.$dane['id'].' '.$dane['nazwa'].' '.$dane['cena'].'</p>';
			?>
	</div>
	
	<div id="stopka">
	Stronę internetową opracował: <span class="italic">000000000</span>
	</div>
	
	</body>
</html>