<?php
$id = $_GET["id"];
?>
<?php include_once "header.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Videojuego registrado con éxito</h1>
        <p>El ID del nuevo videojuego es <?php echo $id ?> </p>
        <a href="listar.php" class="btn btn-primar">Ver listado de videojuegos</a>
    </div>
</div>
<?php include_once "footer.php"; ?>