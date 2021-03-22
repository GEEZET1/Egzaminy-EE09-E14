<?php
  $polaczenie=mysqli_connect('localhost','root','','komis')or die ("Błąd połączenia :".mysqli_error());
?>
<html>
  <head>
    <title>Komis samochodowy</title>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="auto.css">
  </head>
  <body>
    <div id="baner">
      <h1>SAMOCHODY</h1>
    </div>
    <div id="panel_lewy">
      <h2>Wykaz samochodów</h2>
      <ul>
        <?php
          $zapytanie1=mysqli_query($polaczenie,"SELECT id,marka,model FROM samochody");
          while($dane=mysqli_fetch_assoc($zapytanie1))
            echo '<li>'.$dane['id'].' '.$dane['marka'].' '.$dane['model'].'</li>';
        ?>
      </ul>
      <h2>Zamówienia</h2>
        <ul>
        <?php
          $zapytanie2=mysqli_query($polaczenie,"SELECT samochody_id,klient FROM zamowienia");
          while($dane=mysqli_fetch_assoc($zapytanie2))
            echo '<li>'.$dane['samochody_id'].' '.$dane['klient'].'</li>';
        ?>
      </ul>    
    </div>
    <div id="panel_prawy">
      <h2>Pełne dane: Fiat</h2>
        <?php
          $zapytanie3=mysqli_query($polaczenie,"SELECT * FROM samochody WHERE marka='Fiat'");
          while($dane=mysqli_fetch_assoc($zapytanie3))
            echo $dane['id'].' / '.$dane['marka'].' / '.$dane['model'].' / '.$dane['rocznik'].' / '.$dane['kolor'].' / '.$dane['stan'].' / </br>';
        ?>
    </div>
    <div id="stopka">
      <table>
        <tr>
          <td><a href="kwerendy.txt">Kwerendy</a></td>
          <td>Autor:00000000000</td>
          <td><img src="auto.png" alt="komis samochodowy"></td>
        </tr>
      </table>
    </div>

  </body>
</html>
<?php
  mysqli_close($polaczenie);
?>