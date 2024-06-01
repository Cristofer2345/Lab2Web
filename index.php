<?php
require 'Lab2Header.php'
?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['formulario'] == 1) {
            $id = null;
            $name = $_POST['name'];
            $profesor = $_POST['profesor'];
            $mensajeExito = insertPago($name,$profesor);
            $materia = getMateria();
            echo "<script>alert('$mensajeExito');</script>";

        }
        elseif ($_POST['formulario'] == 2) {
            $search = $_POST['Search'];
          $materia=getSearch($search);
        } else {
            echo "No se envió ninguno de los formularios";
        }
       
    }
    ?>
    <div>
        <div class="divForm">
            <form action="index.php" method="POST">
            <input type="hidden" name="formulario" value="1">
                <div class="formGroup">
                    <label for="name1">Nombre</label>
                    <input type="text" id="name1" name="name" placeholder="Nombre">
                </div>
                <div class="formGroup">
                    <label for="profesor"></label>
                    <input type="text" name="profesor" id="cuota1" placeholder="Profesor">
                </div>
                <input type="submit" value="Agregar Mareria" style="margin-top: 10px;">
            </form>
        </div>
        <div>
            <div>
            <h1>Crear un usuario </h1>
            <form action="index.php" method="POST">
                    <input type="hidden" name="formulario" value="2"> 
                    <label for="fecha">Fecha:</label>
                    <input type="text" id="fecha" name="Search">
                    <input type="submit" value="Buscar Materia " style="margin-top: 10px;">

            </form>
            </div>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Profesor</th>
                        <th></th>
                        <th></th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($materia as  $row) { ?>
                        <tr>
                            <th><?= $row->id ?></th>
                            <th><?= $row->nombre ?></th>
                            <th><?= $row->profesor ?></th>
                            <th><a href="">Editar</a></th>
                            <th><a href="">Eliminar</a></th>
                        </tr>
                    <?php }  ?>
                </tbody>

            </table>

        </div>
    </div>
<?php
require 'Labfoster.html'
?>
</body>

</html>