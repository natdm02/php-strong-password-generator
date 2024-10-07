<?php

    session_start();

    if (!isset($_SESSION['password'])) {

        header("Location: ../index.php");
        exit;
    }

    $password = $_SESSION['password'];

    unset($_SESSION['password']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show password</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <main>
        <div class="container">
            <h1>password generata</h1>
            <p>la tua password è: <?php echo htmlspecialchars($password); ?></p>
            <a href="../index.php">torna alla home</a>
        </div>
    </main>
</body>
</html>