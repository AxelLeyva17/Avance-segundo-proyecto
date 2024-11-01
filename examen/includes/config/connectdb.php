<?php 
function connectdb(){

    try {
        $db = mysqli_connect("localhost", "root", "", "bienesraices");
        return $db;
        
    } catch (Exception $e) {
        echo "<p>Error Conexion: {$e->getMessage()}<p>";
        return false;
    }
}
