<?php

function passwordCasuale($lunghezza, $useLetters, $useNumbers, $useSymbols, $allowRepeat ){
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+-=[]{}|;:,.<>?';

    $characterPool = '';

    if ($useLetters) {
        $characterPool .= $letters;
    }
    if ($useNumbers) {
        $characterPool .= $numbers;
    }
    if ($useSymbols) {
        $characterPool .= $symbols;
    }

    if (empty($characterPool)) {
        return '';
    }

    $password = '';
    $usedCharacters = [];







        for ($i = 0; $i < $lunghezza; $i++){
            $randomChar = $characterPool[random_int(0, strlen($characterPool) - 1)];

            if (!$allowRepeat) {
                while (in_array($randomChar, $usedCharacters)) {
                    $randomChar = $characterPool[random_int(0, strlen($characterPool) - 1)];
                }
                $usedCharacters[] = $randomChar;
            }
    
            $password .= $randomChar;
        }
        return $password;

    }

        
    

?>