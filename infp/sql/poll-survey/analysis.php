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
    $db_name = '';

    $db = newmysqli($db_uri, $db_user, $db_pass, $db_name);

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
?>

<p>
    A person aged <strong><?php echo $age; ?></strong> years with the 
    zipcode <strong><?php echo $zcode; ?></strong> voted for 
    the <strong><?php echo $party; ?></strong> with the preferred 
    vote being <strong><?php echo $pvote; ?></strong>.
</p>
