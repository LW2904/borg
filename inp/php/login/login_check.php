<?php
    if (isset($_POST['send'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'gast' && $password == 'supersafe') {
            echo '<p>Welcome, '.$username.'!<p/>';
        } else {
            echo '<p>No access.</p>';
        }
    }
?>
