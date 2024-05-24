<?php include('includes/header.html');
include('InsertarPoema.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
</head>

<body>

    <div class="container">
        <div class="row py-3">
            <?php
            if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?>" role="alert">
                    <?= $_SESSION['message']; ?>

                    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close" style="float: right;"></button>

                </div>
            <?php session_unset();
            }
            ?>
        </div>
    </div>



    <div class="container py-3 mx-auto">
        <div class="row">
            <div class="card card-body">
                <div class="d-flex justify-content-end">
                    <form action="Formulario.php">
                        <button class="btn btn-outline-success" type="submit">Nuevo Libro</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="row">

            <?php
            $query = 'SELECT * FROM Poemas';
            $resultado = mysqli_query($Conexion, $query);
            while ($row = mysqli_fetch_array($resultado)) {

                echo '
                    <div class="col md-4 py-4">
                        <div class="card" style="width: 18rem;">
                            <img src="img/imagenlibro.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['Titulo'] . '</h5>
                                <p class="card-text">' . $row['Autor'] . '</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal" data-bs-poema="' . $row["Titulo"] . '*' . $row["Autor"] . '*' . rtrim(ltrim($row["Poema"])) . '">
                                    Leer poema
                                </button>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="EliminarPoema.php?id_poema='.$row['id_poemas'].'" class="btn btn-outline-primary" name="EliminarPoema"><i class="material-icons">delete</i></a>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <a href="EditarPoema.php?id_poema='.$row['id_poemas'].'" class="btn btn-outline-primary"><i class="material-icons">edit_note</i></a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="poemaTitulo"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 id="poemaAutor"></h6>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="poemaCuerpo" style="height: 250px" disabled></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="Index.js"></script>


    <?php include("includes/footer.php") ?>
</body>

</html>