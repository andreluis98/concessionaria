<?php

    $servidor="localhost";
    $banco="bdmercadocamargo";
    $usuario="root";
    $senha="";


    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>