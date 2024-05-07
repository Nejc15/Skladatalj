<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="CSS/skladatalj.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
</head>

<body>

  <?php
  include("Includes/navigacija.php");
  ?>

  <article>
    <div class="modra_crta"></div>

    <div class="container text-center siva_barva pisava_glavna">
      <div class="row">

        <div class="col-12" align="left">
          <h1 align="center" class="naslovTeme"><b>Kvizi</b></h1>

          <a class="belaBarva" href="kviz.php">
            <h2 class="NasloviVTemi podcrtano">Kviz - Osnove</h2>
          </a>
          Kviz o osnovnih stvareh računalnika je zasnovan za preizkus znanja o ključnih sestavnih delih računalnika<br>
          in osnovnih programih. Vprašanja lahko pokrivajo naslednja področja: <br>
          strojna oprema, programska oprema, sestavni deli
          <br><br>

          <a class="belaBarva" href="#">
            <h2 class="NasloviVTemi podcrtano">Kviz - Strojna oprema</h2>
          </a>
          V tem poglavju smo spoznali osnovne komponente računalnika: procesor,
          pomnilnik, trdi disk ali SSD, grafično kartico in matično ploščo...

        </div>


      </div>
    </div>
  </article>

  <?php
  include("Includes/tacka.php");
  ?>

</body>

</html>