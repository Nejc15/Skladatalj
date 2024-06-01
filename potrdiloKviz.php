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
        <?php

        $conn = mysqli_connect("localhost", "root", "", "SKLADATALJ");
        $odgovor1 = $_REQUEST['v1'];
        $odgovor2 = implode(", ", $_REQUEST['v2']);
        $odgovor3 = implode(", ", $_REQUEST['v3']);
        $odgovor4 = implode(", ", $_REQUEST['v4']);
        $odgovor5 = $_REQUEST['v5'];
        $odgovor6 = $_REQUEST['v6'];
    
   


        $sql = "INSERT INTO odgovori VALUES ('','$odgovor1', '$odgovor2', '$odgovor3', '$odgovor4', '$odgovor5', '$odgovor6')";

        $izpisi = "SELECT * FROM odgovori";

        mysqli_query($conn, $sql);
        mysqli_query($conn, $izpisi);

        $result = $conn->query($izpisi);

        echo '<div class="text-center">';
        while ($row = $result->fetch_assoc()) {
            echo "<b>id: " . $row["ID_osebe"] . "</b><br>";
            echo "Odgovor na prvo vprašanje: " . $row["odgovor1"] . "<br>";
            echo "Odgovor na drugo vprašanje: " . $row["odgovor2"] . "<br>";
            echo "Odgovor na tretje vprašanje: " . $row["odgovor3"] . "<br>";
            echo "Odgovor na četrto vprašanje: " . $row["odgovor4"] . "<br>";
            echo "Odgovor na peto vprašanje: " . $row["odgovor5"] . "<br>";
            echo "Odgovor na šesto vprašanje: " . $row["odgovor6"] . "<br>";
            echo '<br><br><br>';
            echo ' <div class="modra_crta"></div>';
        }



        mysqli_close($conn);
        ?>

    </article>

    <footer class="Nogica fuzbal" align="center">
        Vse pravice pridržane našim velikim penzijam.
    </footer>

</body>

</html>