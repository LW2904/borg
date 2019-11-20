<?php
    if (isset($_GET['loc']))
        $content = $_GET['loc'].'.php';
    else $content='home.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>foo.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <header>
        <img src="./media/foo-logo.png">

        <nav>
            <ul>
                <li><a href="./index.php?loc=home">Home</a></li>
                <li><a href="./index.php?loc=login">Login</a></li>
                <li><a href="./index.php?loc=register">Register</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php include $content ?>
    </main>
</body>

</html>