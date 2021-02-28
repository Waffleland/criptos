 <?php

session_start();
$contenidoMoneda="";
$contenidoTransaccion="";
$contenidoCantidad="";
if(array_key_exists("id",$_COOKIE) && $_COOKIE['id']){
    $_SESSION['id']=$_COOKIE['id'];
}
if(array_key_exists("id",$_SESSION) && $_SESSION['id']){
    include("connection.php");
    $query="SELECT moneda from usuarios WHERE id='".mysqli_real_escape_string($enlace, $_SESSION['id'])."' LIMIT 1";
    $result=mysqli_query($enlace,$query);
    $fila=mysqli_fetch_array($result);
    $contenidoMoneda=$fila['moneda'];

}
else{
    header("Location: index.php");
}
include("header.php");
?>



<?php include("header.php"); ?>

<div class="container">
    <div class="transaccionesVigentes">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Moneda</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Mandale un mail</a>
    </div>
    </div>
    </div>
</div>

<?php include("footer.php"); ?>