<?php include_once "partes/parte_head.php"?>

<body  class="f">

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

<div class="container">

    <div class="row">

        <div class="col-md-3">

        </div>

        <div class="col-md-5">

            <div class="row">

                <form action="" method="get" >

                    <label for="inputNombreActor">Nombre del Actor: </label>
                    <input  type="text" name="inputNombreActor" id="inputNombreActor" class="form-control" placeholder="Escribe el nombre del actor">

                    <label class="mt-3" for="inputApellidoActor">Apellido del Actor: </label>
                    <input type="text" name="inputApellidoActor" id="inputApellidoActor" class="form-control" placeholder="Escribe el apellido del actor">

                    <button type="submit" name="btnGuardarDatos" class="btn btn-secondary mt-3">Guardar Datos</button>

                </form>

            </div>

            <hr>

            <div class="row mt-3 bg-light">

                <div class="col-md-12 ">

                    <table class="table table-striped table-hover">

                        <thead>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                        </thead>

                        <tbody>

                        <?php
                            foreach ($actores as $actor){
                                echo "<tr>
                                <th scope=\"row\">{$actor['actor_id']}</th>
                                <td>{$actor['first_name']}</td>
                                <td>{$actor['last_name']}</td>
                            </tr>";
                            }
                        ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<hr>

<?php include_once "partes/parte_footer.php" ?>