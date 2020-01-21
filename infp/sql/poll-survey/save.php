<?php
    if (!isset($_POST['submit'])) {
        header('Location: ./index.php?loc=home');
        die();
    }

    $zcode = $_POST['zcode'];
    $age = $_POST['age'];
    $party = $_POST['party'];
    $pvote = $_POST['pvote'];

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

    // TODO: Sanitize input to prevent SQL injection
    $sql = <<<EOS
insert into Results (zcode, age, party, pvote)
values ('$zcode', '$age', '$party', '$pvote')
EOS;

    $db->query($sql) or die($db->error);

    $db->close();
?>

<p>
    Your submission has been saved.
</p>
