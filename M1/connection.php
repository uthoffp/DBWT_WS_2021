<?php
$link = mysqli_connect("localhost", // Host der Datenbank
    "root",                         // Benutzername zur Anmeldung
    "root",                         // Passwort
    "emensa"                        // Auswahl der Datenbanken (bzw. des Schemas)
                                            // optional port der Datenbank
);

if (!$link) {
    echo "Verbindung fehlgeschlagen: ", mysqli_connect_error();
    exit();
}
