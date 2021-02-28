<?php
    session_start();
    if(array_key_exists("submit",$_POST)){
        include("conectarmysql.php");
        $query="UPDATE usuarios SET moneda='".mysqli_real_escape_string($enlace,$_POST['moneda'])."' WHERE id=".mysqli_real_escape_string($enlace,$_SESSION['id'])." LIMIT 1";
        mysqli_query($enlace,$query);
    }

    
?>