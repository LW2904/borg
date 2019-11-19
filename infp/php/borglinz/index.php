<?php
if (isset($_GET['content']))
    $content = $_GET['content'].'.php';
else $content='home.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>borglinz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <img src="./borg_logo.png" />

        <nav>
            <ul>
                <li><a href="./index.php?content=home">Home</a></li>
                <li><a href="./index.php?content=info">Info</a></li>
                <li><a href="./index.php?content=about">About</a></li>
                <li><a href="./index.php?content=media">Media</a></li>
                <li><a href="./index.php?content=download">Download</a></li>
                <li><a href="./index.php?content=contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php include $content ?>
    </main>
</body>

</html>