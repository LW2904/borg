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

    $today = date("Y-m-d");
    $time = $_POST['zeit'];
    $status = $_POST['status'] == 'alle' ? '%' : $_POST['status'];

    $sql = <<<EOS
        select * from buchungen b, teilnehmer t, seminare s
        where b.teilnehmerID = t.teilnehmerID
            and b.seminarID = s.seminarID
            and b.zahlungsstatus like '$status'
EOS;

    if ($time != 'alle') {
        $op = $time == 'vergangene' ? '<' : '>';
        $sql .= "and s.datum $op '$today'";
    }

    $sql .= "order by s.datum, s.bezeichnung, t.name, t.vorname";

    $result;
    if (!$result = $db->query($sql)) die($db->error);

    if ($result->num_rows > 0) {
        echo "<div class=\"justify-center\"><table>";
        echo <<<EOS
        <tr>
            <th>Datum</th>
            <th>Bezeichnung</th>
            <th>Teilnehmer*in</th>
            <th>Adresse</th>
            <th>Zahlungsstatus</th>
            <th>Bewertung</th>
        </tr>
EOS;

        while ($row = $result->fetch_assoc()) {
            echo <<<EOS
                <tr>
                    <td>$row[datum]</td>
                    <td>$row[bezeichnung]</td>
                    <td>$row[vorname] $row[name]</td>
                    <td>$row[strasse], $row[PLZ] $row[ort]</td>
                    <td>$row[zahlungsstatus]</td>
                    <td>$row[bewertung]</td>
                </tr>
EOS;
        }

        echo "</table></div>";
    } else {
        echo "Keine Einträge gefunden.";
    }
?>