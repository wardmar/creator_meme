<?php
$hote = 'localhost';
    $base = 'imagememe';
    $user = 'Dev';
    $pass = 'luwasx18500';
        
        try
    {
        $bdd = new PDO("mysql:host=$hote;dbname=$base;charset=utf8", "$user", "$pass",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    ?>