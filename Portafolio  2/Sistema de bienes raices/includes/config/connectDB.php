<?php

    function conectar(): mysqli {
        $db = mysqli_connect("localhost","root","","Bienesracies");

        if ($db) {
        echo 'conectado';
        }else{
            echo 'no conectado';
        }
        return $db;
    }
?>