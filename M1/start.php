<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ihre e-Mensa</title>
    <link href="./style.css" rel="stylesheet">
</head>
<body>
<?php include "./header.html" ?>
<main>
    <div>
        <img src="./images/img.png" alt="titelbild" id="frontImage"><br>
    </div>
    <div>
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
    <div>
        <h2>Köstlichkeiten, die sie erwarten</h2>
        <table id="startTable">
            <tr>
                <td></td>
                <td>Preis intern</td>
                <td>Preis extern</td>
            </tr>
            <tr>
                <td>Rindfleisch mit Bambus, Keiserschoten und rotem Paprika, dazu Mia Nudeln</td>
                <td>3,50€</td>
                <td>6,20€</td>
            </tr>
            <tr>
                <td>Spinatrisotto mit kleinen Samosateigecken und gemischter Salat</td>
                <td>2,90€</td>
                <td>5,30€</td>
            </tr>
        </table>
    </div>
    <div>
        <h2>E-Mensa in Zahlen</h2>
        <div class="row">
            <div><label>x Besuche</label></div>
            <div><label>y Anmeldungen zum Newsletter</label></div>
            <div><label>z Speisen</label></div>
        </div>

    </div>
    <div>
        <h2>Interesse geweckt? Wir informieren Sie!</h2>
        <form >
            <div class="row" >
                <div>
                    <label>Ihr Name:</label>
                    <input type="email" placeholder="Vorname" required>
                </div>
                <div>
                    <label>Ihre Email:</label>
                    <input type="email" required>
                </div>
                <div>
                    <label>Newsletter bitte in:</label><br>
                    <select>
                        <option>Deutsch</option>
                        <option>Englisch</option>
                        <option>Französisch</option>
                    </select></div>
            </div>
            <div class="row" id="startForm">
                <div><input type="checkbox" required>Den Datenschutzbestimmungen stimme ich zu</input></div>
                <div><input type="submit" value="Zum Newsletter anmelden"></div>
            </div>
        </form>
    </div>
    <div>
        <h2>Das ist uns wichtig</h2>
        <ul>
            <li>Beste frische saisonale Zutaten</li>
            <li>Ausgewogene abwechslungsreiche Gerichte</li>
            <li>Sauberkeit</li>
        </ul>
    </div>
    <div><h2>Wir freuen uns auf iheren Besuch!</h2></div>
</main>
<?php include "./footer.html" ?>
</body>
</html>