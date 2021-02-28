<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ihre e-Mensa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">

</head>
<body>
<?php include "./header.html" ?>
<main class="container">
    <div class="row">
        <div class="col">
            <img src="./images/img.png" alt="titelbild" id="frontImage"><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Bald gibt es Essen auch online ;)</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                elit. Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus
                mus. Donec quam felis,ultricies nec, pellentesque
                eu, pretium quis, sem. Nulla consequat massa quis
                enim. Donec pede justo, fringilla vel, aliquet nec,
                vulputate eget, arcu. In enim justo, rhoncus ut,
                imperdiet a, venenatis vitae, justo. Nullam dictum
                felis eu pede
                mollis pretium. Integer tincidunt. Cras dapibus.
                Vivamus elementum semper nisi. Aenean vulputate
                eleifend tellus. Aenean leo ligula, porttitor eu,
                consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                dapibus in, viverra quis, feugiat a, tellus. Phasellus
                viverra nulla ut metus varius laoreet. Quisque rutrum.
                Aenean imperdiet. Etiam ultricies nisi vel augue.
                Curabitur ullamcorper ultricies nisi.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Köstlichkeiten, die sie erwarten</h2>
            <table id="startTable">
                <thead>
                <tr>
                    <td></td>
                    <td>Preis intern</td>
                    <td>Preis extern</td>
                </tr>
                </thead>

                <?php const filename = "meals.txt";
                if (file_exists(filename)) {
                    include "connection.php";

                    $query = "SELECT name, beschreibung, preis_extern, preis_intern FROM gericht ORDER BY RAND() LIMIT 5;";
                    $result = mysqli_query($link, $query);
                    if (!$result) {
                        echo "Fehler während der Abfrage:  ", mysqli_error($link);
                        exit();
                    }

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>{$row['name']}</td><td>{$row['preis_intern']}&euro;</td><td>{$row['preis_extern']}&euro;</td></tr>";
                    }
                } ?>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>E-Mensa in Zahlen</h2>
        </div>
        <div class="container textCenter">
            <div class="row">
                <div class="col"><label>x Besuche</label></div>
                <div class="col"><label>y Anmeldungen zum Newsletter</label></div>
                <div class="col"><label>z Speisen</label></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Interesse geweckt? Wir informieren Sie!</h2>
            <form method="post" action="register.php" class="container form-control">
                <div class="row">
                    <div class="col">
                        <label>Ihr Name:</label><br>
                        <input type="text" placeholder="Vorname" class="form-control" name="name" required>
                    </div>
                    <div class="col">
                        <label>Ihre Email:</label><br>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col">
                        <label>Newsletter bitte in:</label><br>
                        <select class="form-control" name="lang">
                            <option>Deutsch</option>
                            <option>Englisch</option>
                            <option>Französisch</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row" id="startForm">
                    <div class="col">
                        <input type="checkbox" class="checkbox" id="gdpr" name="gdpr" required>
                        <label for="gdpr">Den Datenschutzbestimmungen stimme ich zu</label>
                        </input>
                    </div>
                    <div class="col"><input type="submit" class="btn" value="Zum Newsletter anmelden"></div>
                </div>
                <?php
                if (isset($_GET['news'])) {
                    if ($_GET['news']) {
                        echo '<lable class="success">Anmeldung erfolgreich!</lable>';
                    } else {
                        echo '<lable class="error">Bei der Anmeldung ist ein Fehler Aufgetreten. Bitte verwenden sie nur gültige Angaben.</lable>';
                    }

                }
                ?>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Das ist uns wichtig</h2>
            <ul>
                <li>Beste frische saisonale Zutaten</li>
                <li>Ausgewogene abwechslungsreiche Gerichte</li>
                <li>Sauberkeit</li>
            </ul>
        </div>
    </div>
    <div class="row textCenter" id="mensaCounter">
        <div class="col">
            <h2 id="mensaCounter">Wir freuen uns auf Ihren Besuch!</h2>
        </div>
    </div>
</main>
<?php include "./footer.html" ?>
</body>
</html>