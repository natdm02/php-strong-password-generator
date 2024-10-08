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

        $useLetters = isset($_GET['letters']) ? true : false;
        $useNumbers = isset($_GET['numbers']) ? true : false;
        $useSymbols = isset($_GET['symbols']) ? true : false;

        $allowRepeat = isset($_GET['repeat']) && $_GET['repeat'] == "1" ? true : false;


        //var_dump($lunghezza);

        if ($lunghezza > 0 && ($useLetters || $useNumbers || $useSymbols)) {

            $passwordGenerata = passwordCasuale($lunghezza, $useLetters, $useNumbers, $useSymbols, $allowRepeat);

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
            <h1>strong Password Generator</h1>
            <h3>Genera una password sicura</h3>

            <form method="GET" action="">
                <label for="lenght">lughezza password:</label>
                <input type="number" id="lenght" name="lenght" min="1" max="50" required>

                
                <div class="character-options">
                    <h3>caratteri da includere:</h3>
                    <input type="checkbox" id="letters" name="letters" value="1">
                    <label for="letters">lettere</label>
                    <input type="checkbox" id="numbers" name="numbers" value="1">
                    <label for="numbers">numeri</label>
                    <input type="checkbox" id="symbols" name="symbols" value="1">
                    <label for="symbols">simboli</label>
                </div>

                
                <div class="repeat-options">
                    <h3> consenti ripetizioni di uno o più carattere:</h3>
                    <input type="radio" id="allow_repeat" name="repeat" value="1" checked>
                    <label for="allow_repeat">SI</label>
                    <input type="radio" id="no_repeat" name="repeat" value="0">
                    <label for="no_repeat">NO</label>
                </div>

                <button type="submit">genera password</button>
            </form>

            <p style="color:red;"><?php echo htmlspecialchars($errorMessage); ?></p>
        </div>
    </main>
</body>

</body>
</html>