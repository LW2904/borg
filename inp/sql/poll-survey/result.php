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

    // Orders results by the party with the most votes, horrible performance
    $sql = <<<EOS
        select Results.party, counter.count from Results
        left join (
            select Results.party, count(Results.party) as count from Results
            group by Results.party
        ) counter ON counter.party = Results.party
        order by counter.count DESC;
EOS;

    $result;
    if (!$result = $db->query($sql)) die($db->error);

    $parties = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $prev = 0;
            $party = $row["party"];

            if (array_key_exists($party, $parties))
                $prev = $parties[$party];

            $parties[$party] = $prev + 1;
        }
    } else {
        echo "No entries found.";
    }

    $db->close();

    echo "<ol>";
    foreach ($parties as $party => $votes) {
        $percentage = round($votes / $result->num_rows * 100, 2);
        echo "<li><b>$party</b>: $percentage%</li>";
    }
    echo "</ol>";
?>

<p>
</p>
