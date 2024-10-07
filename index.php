<?php
    function passwordCasuale($lunghezza){
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        $password = '';

        for ($i = 0; $i < $lunghezza; $i++){
            $password = $caratteri [rand(0,strlen($caratteri)-1)];
        }

        return $password;
    }

    if (isset($_GET['lenght'])){
        $lunghezza = intval($_GET['lenght']);

        echo "<p><strong>Var dump della lunghezza:</strong></p>";

        var_dump($lunghezza);

        if ($lunghezza > 0) {

            $passwordGenerata = generaPasswordCasuale($lunghezza);

            

            var_dump($passwordGenerata);

            
        }else{
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
</head>
<body>
    <main>
       <h1>password casuale:</h1>

       <form action="GET">
        <label for="lenght">lunghezza password:</label>
        <input type="number" id="lenght" name="lenght" min="1" max="50" required>
        <button type="submit">invia</button>
       </form>
    </main>
</body>
</html>