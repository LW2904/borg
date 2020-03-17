<?php
    if (!isset($_POST['submit'])) {
        header('Location: ./index.php?loc=home');
        die();
    }

    $zcode = $_POST['zcode'];
    $age = $_POST['age'];
    $party = $_POST['party'];
    $pvote = $_POST['pvote'];
?>

<p>
    A person aged <strong><?php echo $age; ?></strong> years with the 
    zipcode <strong><?php echo $zcode; ?></strong> voted for 
    the <strong><?php echo $party; ?></strong> with the preferred 
    vote being <strong><?php echo $pvote; ?></strong>.
</p>
