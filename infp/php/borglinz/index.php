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

    <style>
        body {
            margin-top: 2em;
            margin-left: auto;
            margin-right: auto;
            max-width: 1000px;

            padding-left: 1em;
            padding-right: 1em;
        }

        img {
            width: 300px;
            height: auto;
        }

        header {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: flex-end;

            border-bottom: 1px solid black;
        }

        div.flex-seperator {
            flex-grow: 1;
        }

        ul {
            display: flex;
            flex-direction: row;
            list-style-type: none;
        }

        li:not(:last-child) {
            margin-right: 0.5em;
        }
    </style>
</head>

<body>
    <header>
        <div>
            <img src="./borg_logo.png" />
        </div>

        <div class='flex-seperator'></div>

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