<?php  include("temp/cabecera.php"); ?>

<?php  
    include("administrador/config/bd.php");

    $sentenciaSQL= $conexion->prepare("SELECT * FROM juegos");
    $sentenciaSQL->execute();
    $listaJuegos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

    <?php  
        foreach($listaJuegos as $juego ) {
    ?>
    <div class="col-md-3">
    <div class="card">
    <img class="card-img-top" src="./img/<?php echo $juego['imagen']; ?>" width="125px" height="400px" alt="">
    <div class="card-body">
        <h4 class="card-title"><?php echo $juego['nombre']; ?> </h4>
        

</div>
</div>
</div>

<?php  } ?>
<? include("temp/pie.php"); ?>