<?php
if (isset($_GET['content']))
    $content = $_GET['content'].'.php';
else $content='home.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Simple Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <h1>Simple Login</h1>
    </header>

    <main>
        <form action="login_check.php" method="post" enctype="multipart/form-data">
            <label>Username: <input type="text" name="username"></label><br>
            <label>Password: <input type="text" name="password"></label><br>
            <button type="submit" name="send">Submit</button>
        </form>
    </main>
</body>

</html>