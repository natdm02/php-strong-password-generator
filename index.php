<?php

require __DIR__ . '/functions.php';

$error = null;

if ((isset($_GET['pass-length'])) && (is_numeric($_GET['pass-length']))) {
    $passlength = intval($_GET['pass-length']);

    if (($passlength < 8) || ($passlength > 32)) {
        $error = 'La password deve avere minimo 8 caratteri e massimo 32';
    } else {

        //functions.php
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<main>
        <h1>password generation:</h1>

        <form action="" method="get">
            <label for="pass-length">LUNGHEZZA DELLA PASSWORD:</label>
            <input type="number" name="pass-length" id="pass-length" min="8" max="32">
            <button type="submit">GENERA</button>
        </form>
        <div>
            
            <strong>
                <?php
                if ($error != null) {
                    echo $error;
                }
                ?>
            </strong>
        </div>
        <h3>LA MIA PASSWORD GENERATA:</h3>
        <div>
            <?php
            echo generatePassword($passlength);
            ?>
        </div>
    </main>

</body>
</html>