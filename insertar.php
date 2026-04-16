<?php include_once "encabezado.php"; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<div class="row">
    <div class="col-12">
        <h1>Registrar videojuego</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <textarea placeholder="Inserte el tipo de categoria del videojuego" class="form-control" name="tipo" id="tipo" required></textarea>
            </div>
            <div class="form-group"><button class="btn btn-success">Añadir</button></div>
        </form>
    </div>
</div>
<button class="btn btn-dark"><a href="index.php">Volver a la página principal</a></button>
<?php include_once "footer.php"; ?>
