<?php
/**
 * Created by PhpStorm.
 * User: SaelAharafat
 * Date: 26/05/2015
 * Time: 06:06 PM
 */


?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hola">
    <meta name="keywords" content="hola">
    <meta name="author" content="Sael">
    <meta name="viewport" content="initial-scale=1,maximun"

    <head>


    <?php

    echo "<body> <title>Mi primera Vez</title>";

    for ($x = 1; $x <= 100; $x++) {

        echo "<h1> Esta es una prueba de PHPStorm</h1>";

    }
    if ($_GET['variableA'] == 1) {
        echo "<script>alert('MENSAJE A'); </script>";
    } else if ($_GET['variableA'] == 2) {
        echo "<script>alert('Mensaje A2'); </script>";

    }else if(strcmp($_GET['variableB'],'texto')==0){
        echo "<script>alert('Mensaje 2'); </script>";

    }else if(strcmp($_GET['variableB'],'texto2')==0){
        echo "<script>alert('Mensaje 3); </script>";

    }
    $a=$_GET['variableC'];
    switch($a){
        case 1:
            echo "<script>alert('Mensaje del case'); </script>";

            break;
    }


    echo "</body>";




    ?>


    </html>
