<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $ufname = $fname;
    $ulname = $lname;
    
    $dotpos = strpos($fname, '.');
    if ($dotpos !== false) {
        $ufname = substr($fname, $dotpos + 2);
    }

    $compos = strpos($lname, ',');
    if ($compos !== false) {
        $ulname = substr($lname, 0, $compos);
    }

    $uname = strtolower(str_replace(['-', ' '], '', $ufname.''.$ulname));
?>

<h1>Your registration was successful!</h1>

<p><b>Name:</b> <?php echo $fname.' '.$lname; ?></p>

<p><b>Username:</b> <?php echo $uname; ?></p>

<p><b>Password:</b> The password you entered.</p>

<p>
    A confirmation of your registration has been sent to the following 
    E-Mail address: <u><?php echo $_POST['email']; ?></u>.
</p>
