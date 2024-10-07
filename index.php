<?php
    // function passwordCasuale($lunghezza){
    //     $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    //     $password = '';

    //     for ($i = 0; $i < $lunghezza; $i++){
    //         $password = $caratteri [rand(0,strlen($caratteri)-1)];
    //     }

    //     return $password;
    // }

    require_once __DIR__ . '/function/functions.php';

    session_start();

    $passwordGenerata = "";
    $errorMessage = "";

    if (isset($_GET['lenght'])){

        $lunghezza = intval($_GET['lenght']);

        //var_dump($lunghezza);

        if ($lunghezza > 0) {

            $passwordGenerata = passwordCasuale($lunghezza);

            $_SESSION['password'] = $passwordGenerata;

            //var_dump($passwordGenerata);

            header("Location: views/show_password.php");

        }else {

            $errorMessage = "inserisci un numero maggiore di 0";
        }

        

    }
?>
    




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <main>

        <div class="container">
            <h1>password casuale:</h1>

        <form method="GET" action="">

            <label for="lenght">lunghezza password:</label>
            <input type="number" id="lenght" name="lenght" min="1" max="50" required>
            <button type="submit">invia</button>

        </form>

        <p style="color:red;"><?php echo htmlspecialchars($errorMessage); ?></p>
        
        </div>

    </main>

</body>
</html>