<?php
    if (!isset($_POST['submit'])) {
        die();
    }

    $server_name = "localhost";
    $db_benutzer = "root";
    $db_passwort = "";
    $db_name = "BHZ";
    $db = new mysqli($server_name, $db_benutzer, $db_passwort, $db_name);

    if ($db->connect_error) {
        die($db->connect_error);
    }

    $seminar = $_POST['seminar'];

    $sql = <<<EOS
        select count(s.seminarID), kapazitaet from buchungen b, seminare s
        where s.seminarID = b.seminarID and s.seminarID = $seminar
EOS;

    $result;
    if (!$result = $db->query($sql)) die($db->error);

    $row = $result->fetch_assoc();
    
    if ($row['count(s.seminarID)'] >= $row['kapazitaet']) {
        die('Kapazität bereits erreicht');
    }

    $sql = <<<EOS
        insert into buchungen (seminarID, teilnehmerID, bewertung, zahlungsstatus)
        values ($seminar, $_POST[teilnehmer], 'offen', 'offen')
EOS;

    $db->query($sql) or die($db->error);

    echo "Daten erfolgreich gespeichert.";
?>
