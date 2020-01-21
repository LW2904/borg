<?php
    $db_uri = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'misc';

    $db = new mysqli($db_uri, $db_user, $db_pass, $db_name);

    if ($db->connect_error) {
        die('Database connection error: '.$db->connect_error);
    }

    $sql = <<<EOS
        create table if not exists Results (
            eid int not null auto_increment,
            zcode varchar(255) not null,
            age int not null,
            party varchar(255) not null,
            pvote varchar(255) not null,
            primary key(eid)
        )
EOS;

    $db->query($sql) or die($db->error);

    $sql = <<<EOS
select eid, zcode, age, party, pvote from Results order by zcode
EOS;

    $result;
    if (!$result = $db->query($sql)) die($db->error);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>#</th><th>Zip</th><th>Age</th><th>Party</th><th>Primary</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo <<<EOS
                <tr>
                    <td>$row[eid]</td>
                    <td>$row[zcode]</td>
                    <td>$row[age]</td>
                    <td>$row[party]</td>
                    <td>$row[pvote]</td>
                </tr>
EOS;
        }

        echo "</table>";
    } else {
        echo "No entries found.";
    }

    $db->close();
?>

<p>
</p>
