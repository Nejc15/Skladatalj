<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/skladatalj.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
</head>

<body>

    <?php
    include("Includes/navigacija.php");
    ?>



    <div class="modra_crta"></div>
    <div class="container_profil">
        <h2 align="center">Profil</h2>
        <form action="potrdilo.php" method="POST" onsubmit="return preveriGeslo()">
            <div class="mb-3">
                <label for="fname" class="form-label">Ime:</label>
                <input type="text" class="form-control" id="fname" name="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Priimek:</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Ulica:</label>
                <input type="text" class="form-control" id="address" name="ulica" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefonska:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Mesto:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="mb-3">
                <label for="street" class="form-label">Poštna Številka:</label>
                <input type="number" class="form-control" id="street" name="postnast" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Geslo:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Potrdi geslo:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary" id="confirm_button">Potrdi</button>
            <button type="button" class="btn btn-secondary" onclick="cancel()">Počisti</button>

            <script>

                function preveriGeslo() {
                    var password = document.getElementById("password").value;
                    var confirmPassword = document.getElementById("confirm_password").value;
                    if (password !== confirmPassword) {
                        alert("Gesli se ne ujemata. Prosimo, poskusite ponovno.");
                        return false;
                    }
                    return true;
                }


                function cancel() {
                    if (confirm("Ste prepričani da bi radi počistili obrazec?")) {
                        document.getElementById("fname").value = "";
                        document.getElementById("lname").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("address").value = "";
                        document.getElementById("phone").value = "";
                        document.getElementById("city").value = "";
                        document.getElementById("street").value = "";
                        document.getElementById("password").value = "";
                        document.getElementById("confirm_password").value = "";
                    }
                }
            </script>
        </form>

    </div>


    <?php
    include("Includes/tacka.php");
    ?>
</body>

</html>