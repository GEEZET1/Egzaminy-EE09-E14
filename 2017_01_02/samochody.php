<?php
$connect = mysqli_connect('localhost', 'root','', 'wynajem') or die("Błąd połączenia")
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wynajmujemy Samochody</title>
	<link rel="Stylesheet" href="styl.css">
</head>

<body>
	<div id="baner">
		<h1>Wynajem Samochodów</h1>
	</div>
	
	<div id="lewy">
		<h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
		<?php
		$q=mysqli_query($connect,'SELECT id,model,kolor from samochody where marka="Toyota" and rocznik="2014"');
		
		while($dane=mysqli_fetch_assoc($q))
		echo '<p>'.$dane['id'].' Toyota '.$dane['model'].' Kolor '.$dane['kolor'].'</p>';
		
		
		echo'<h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>';
		
		
		$q2=mysqli_query($connect,'SELECT id,marka,model,rocznik from samochody');
		
		while($dane=mysqli_fetch_assoc($q2))
		echo $dane['id'].' '.$dane['marka'].' '.$dane['model'].' '.$dane['rocznik'].'</br>';
		?>
	</div>
	
	<div id="srodek">
		<h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
		<?php
		$q=mysqli_query($connect,'SELECT samochody.id, model, telefon from samochody,zamowienia where samochody.id=zamowienia.Samochody_id');
		
		while($dane=mysqli_fetch_assoc($q))
		echo $dane['id'].' '.$dane['model'].' '.$dane['telefon'].'</br>';
		?>
	</div>
	
	<div id="prawy">
		<h2>NASZA OFERTA</h2>
		
		<ul>
		<li>Fiat</li>
		<li>Toyota</li>
		<li>Opel</li>
		<li>Mercedes</li>
		</ul>

		<p>Tu pobierzesz naszą <a href="komis.sql">bazę danych</a></p>
		
		autor strony: 00000000000
	</div>
	
</body>

</html>
<?php
mysqli_close($connect)
?>