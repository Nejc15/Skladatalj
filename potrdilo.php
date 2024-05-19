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

        <div class="container siva_barva pisava_glavna">
        <h1 align="center">To so vaši podatki:</h1>
        Ime in priimek: <?php echo $_POST['fname'] . ' ' . $_POST['lname'];?><br>
        E-pošta: <?php echo $_POST['email'];?><br>
        Naslov: <?php echo $_POST['ulica'].', '.$_POST['postnast'].' '.$_POST['city'];?><br>
        Telefonska številka: <?php echo $_POST['phone'];?><br>
        Je to mogoče tvoje geslo: <?php echo $_POST['password'];?><br>
        <br><br>
        aja...


        </div>
    </article>

    <footer class="Nogica fuzbal" align="center">
        Vse pravice pridržane našim velikim penzijam.
    </footer>

</body>

</html>