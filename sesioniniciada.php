<?php

    session_start();
    $contenidoMoneda="";
    $contenidoTransaccion="";
    $contenidoCantidad="";
    
    if(array_key_exists("id",$_COOKIE) && $_COOKIE['id']){
        $_SESSION['id']=$_COOKIE['id'];
    }
    if (array_key_exists("submit",$_POST)){
        include("conectarmysql.php");

        $query="UPDATE usuarios SET transaccion='".mysqli_real_escape_string($enlace,$_POST['transaccion'])."' WHERE id=".mysqli_real_escape_string($enlace,$_SESSION['id'])." LIMIT 1";
        mysqli_query($enlace,$query);
        $query="UPDATE usuarios SET moneda='".mysqli_real_escape_string($enlace,$_POST['moneda'])."' WHERE id=".mysqli_real_escape_string($enlace,$_SESSION['id'])." LIMIT 1";
        mysqli_query($enlace,$query);
        $query="UPDATE usuarios SET cantidad='".mysqli_real_escape_string($enlace,$_POST['cantidad'])."' WHERE id=".mysqli_real_escape_string($enlace,$_SESSION['id'])." LIMIT 1";
        mysqli_query($enlace,$query);
    }
    else{
        header("Location: index.php");
    }
    include ("header.php");
    
?>





<?php include("header.php"); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top d-flex justify-content-between">
    <a class="navbar-brand" href="#">Criptoweb</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="form-inline my-2 my-lg-0">
        <a href="index.php?Logout=1"><button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cerrar sesión</button></a>
        </div>
    </div>
    </nav>
<div class="container">
<h1>¿Qué transacción te gustaría hacer?</h1>
    <form method="POST" id="formularioTransaccion">
            
            <div class="form-check">
        <input class="form-check-input" type="radio" name="transaccion" id="transaccion" value="Comprar" checked>
        <label class="form-check-label" for="exampleRadios1">
            Comprar criptomonedas
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="transaccion" id="transaccion" value="Vender">
        <label class="form-check-label" for="exampleRadios2">
            Vender criptomonedas
        </label>
        </div>
            <div class="form-group">
            <input class="form-control" type="cantidad" name="cantidad" placeholder="¿Cuanto?">
            </div>
            <div class="form-group">
                <input class="form-control" type="moneda" name="moneda" placeholder="¿Qué tipo de moneda es?">
            </div>
            <input type="hidden" name="registro" value=0>
            <input class="btn btn-warning"  type="submit" name="submit" value="Subí tu oferta">
    </form>
    <a href="transacciones.php" class="btn btn-outline-warning btn-block" >Transacciones vigentes</a>
</div>


<?php include("footer.php"); ?>