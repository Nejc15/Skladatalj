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
          <h1 class="naslovTeme"><b>Teme za izobraževanje</b></h1>

          <a class="belaBarva" href="tema1.php">
            <h2 class="NasloviVTemi podcrtano">Tema 1: Uvod</h2>
          </a>
          V uvodnem delu boste izvedeli nekaj o osnovah tega izobraževanja, ter kaj lahko
          pričakujete v nadaljni literaturi in kvizih.
          <br><br>

          <a class="belaBarva" href="tema2.php">
            <h2 class="NasloviVTemi podcrtano">Tema 2: Komponente</h2>
          </a>
          V tem poglavju smo spoznali osnovne komponente računalnika: procesor,
          pomnilnik, trdi disk ali SSD, grafično kartico in matično ploščo...
          <br><br>

          <a class="belaBarva" href="tema3.php">
            <h2 class="NasloviVTemi podcrtano">Tema 3: Programi</h2>
          </a>
          V tem poglavju smo spoznali osnovne računalniške programe, kot so operacijski sistem, spletni
          brskalniki, urejevalniki besedil, preglednice, in programi za urejanje slik ter videoposnetkov
          <br><br>
        </div>


      </div>
    </div>
  </article>

  <?php
  include("Includes/tacka.php");
  ?>

</body>

</html>