<?php

function passwordCasuale($lunghezza){
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        $password = '';

        for ($i = 0; $i < $lunghezza; $i++){
            $password = $caratteri [rand(0,strlen($caratteri)-1)];
        }

        return $password;
    }

?>