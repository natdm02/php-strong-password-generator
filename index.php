<?php
    function passwordCasuale($lunghezza){
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        $password = '';

        for ($i = 0; $i < $lunghezza; $i++){
            $password = $caratteri [rand(0,strlen($caratteri)-1)];
        }

        return $password;
    }

    $passwordGenerata = "";
    $errorMessage = "";

    if (isset($_GET['lenght'])){
        $lunghezza = intval($_GET['lenght']);

        var_dump($lunghezza);

        if ($lunghezza > 0) {

            $passwordGenerata = passwordCasuale($lunghezza);

            

            var_dump($passwordGenerata);

            
        }

        if ($lunghezza <= 0) {
            
            $errorMessage = "Inserisci un numero maggiore di 0";
        }

    }
?>
    




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
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

        <div class="password-box">

        <p>password: <?php echo htmlspecialchars($passwordGenerata); ?></p>

        </div>

        <p style="color:red;"><?php echo htmlspecialchars($errorMessage); ?></p>
        
        </div>

    </main>

</body>
</html>