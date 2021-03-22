<?php 
$connect=mysqli_connect('localhost','root','','dane') or die ('Błąd połączenia');

$tytul=$_POST['tytul'];
$gatunek=$_POST['gatunek'];
$rok_produkcji=$_POST['rok_produkcji'];
$ocena=$_POST['ocena'];

mysqli_query($connect,"INSERT INTO `filmy`(`tytul`,`gatunki_id`, `rok`, `ocena`) VALUES ('$tytul',$gatunek,$rok_produkcji,$ocena)");

echo "Film $tytul został dodany do bazy";

mysqli_close($connect);

?>