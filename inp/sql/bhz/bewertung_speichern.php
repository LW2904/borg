<?php
    $server_name = "localhost";
    $db_benutzer = "root";
    $db_passwort = "";
    $db_name = "BHZ";
    $db = new mysqli($server_name, $db_benutzer, $db_passwort, $db_name);

    if ($db->connect_error) {
        die($db->connect_error);
    }

    $sql = <<<EOS
        update buchungen set bewertung = '$_POST[bewertung]'
        where teilnehmerID = $_POST[teilnehmer] and seminarID = $_POST[seminar]
EOS;

    $db->query($sql) or die($db->error);

    echo "Daten erfolgreich gespeichert.";
?>
