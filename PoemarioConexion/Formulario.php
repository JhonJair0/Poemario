<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Nuevo libro</title>
</head>



<body>

<?php include('includes/header.html'); ?>


    <div class="container py-5">
        <div class="row">
            <div clas="cols">
                <div class="card">
                    <div class="card-body py-3">
                        <form action="InsertarPoema.php" method="post">
                            <div class="mb-3">
                                <label for="LblAutor" class="form-label">Ingrese el nombre del autor</label>
                                <input type="Text" class="form-control" id="TxtNombreAutor" name="TxtNombreAutor" required>               
                            </div>
                            <div class="mb-3">
                                <label for="LblTitulo" class="form-label">Ingrese el titulo del poema</label>
                                <input type="Text" class="form-control" id="TxtTitulo" name="TxtTitulo">
                            </div>
                            <div class="mb-3">
                                <label for="LblPoema" class="form-label">Ingrese el poema</label>
                                <textarea type="Text" rows="2" class="form-control" id="TxtPoema" name="TxtPoema"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="BtnAgregar">Agregar Poema</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>