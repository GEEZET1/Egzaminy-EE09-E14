<?php $connect=mysqli_connect('localhost','root','','sklep') or die('błąd połączenia') ?>
<html>
<head>
	<meta charset='utf-8'>
	<title>Nasz sklep komputerowy</title>
	<link rel='Stylesheet' href='styl8.css'>
</head>
<body>
	<div id='menu'>
		<a href='index.php'>Główna</a>
		<a href='procesory.html'>Procesory</a>
		<a href='ram.html'>RAM</a>
		<a href='grafika.html'>Grafika</a>
	</div>
	<div id='logo'>
		<h2>Podzespoły komputerowe</h2>
	</div>
	<div id='glowny'>
		<h1>Dzisiejsze promocje</h1>
		<?php
		$tabela=mysqli_query($connect,'SELECT id, nazwa, opis, cena from podzespoly where cena < 1000');
		echo '<table>
				<tr><th>NUMER</th> <th>NAZWA PODZESPOŁU</th> <th>OPIS</th> <th>CENA</th></tr>';
		while($data = mysqli_fetch_assoc($tabela)){
						echo"<tr><td>".$data['id']."</td> <td>".$data['nazwa']."</td> <td>".$data['opis']."</td> <td id='cena'>".$data['cena']."</td></tr>";};
		echo'</table>';
				
		mysqli_close($connect);
		?>
	</div>
	<div class='stopka'><img src='scalak.jpg' alt='promocje na procesory'></div>
	<div class='stopka'><h4>Nasz sklep komputerowy</h4><p>Współpracujemy z hurtownią<a href='http://www.edata.pl/' target='_blank'>edata</a></p></div>
	<div class='stopka'><p>zadzwoń: 601 602 603</p></div>
	<div class='stopka'><p>Stronę wykonał: 00000000000</p></div>
</body>
</html>