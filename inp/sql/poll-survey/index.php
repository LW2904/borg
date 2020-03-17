<?php
    if (isset($_GET['loc']))
        $content = $_GET['loc'].'.php';
    else $content='home.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Poll Survey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Poll Survey</h1>

        <img src="./media/banner.png" class='logo'>

        <nav>
            <ul>
                <li><a href="./index.php?loc=home">Home</a></li>
                <li><a href="./index.php?loc=survey">Survey</a></li>
                <li><a href="./index.php?loc=list">List</a></li>
                <li><a href="./index.php?loc=result">Preliminary Result</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php include $content ?>
    </main>

    <footer>
        <p>
            <strong>MONA</strong> Opinion Research LLC, all rights reserved.
        </p>
    </footer>
</body>

</html>