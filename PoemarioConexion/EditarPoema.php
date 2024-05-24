<?php include("Conexion/ConexionBaseDatos.php");
// validación
if (isset($_GET['id_poema'])) {
    
    $id = $_GET['id_poema'];

    $Query = "SELECT * FROM Poemas WHERE id_poemas = $id";
    $result = mysqli_query($Conexion, $Query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $Autor = $row['Autor'];
        $Titulo = $row['Titulo'];
        $Poema =  $row['Poema'];
    }
}
?>
<?php include('includes/header.html')?>
<div class="container">
    <div class="row py-5">
        <div class="col-md-4 mx-auto">
            <div class="card card-body py-3">
                <h2 class="mx-auto">Modificar Poema</h2>
                <form action="ActualizarPoema.php" method="post">
                    <div>
                        <input type="hidden" name="TxtIdPoema" value="<?= $id; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="TxtNombreAutor" name="TxtNombreAutor" 
                        placeholder="encontrar cuaderno" autofocus required value="<?= $Autor; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="Titulo" class="form-label">Titulo</label>
                        <textarea type="text" class="form-control" id="TxtTitulo" rows="2" name="TxtTitulo" 
                         required><?php echo $Titulo; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Poema" class="form-label">Poema</label>
                        <textarea type="text" class="form-control" id="TxtPoema" rows="2" name="TxtPoema" 
                        required><?php echo $Poema; ?></textarea>
                    </div>
                    <div class="py-3">
                        <div class="d-grid gab-2">
                            <button type="submit" class="btn btn-primary" name="ActualizarPoema">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>