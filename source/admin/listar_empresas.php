<?php
    Include("../../includes/header.php");

    Include("../../includes/conectar.php");
    $conexion = conectar();

?>
<main>
        <div class="container-fluid px-4">
                <h1 class="mt-4">Listado de empresas</h1>
        <?php
            $sql="SELECT * FROM empresas";
            $registros=mysqli_query($conexion,$sql);

            //echo '<table class="table table-success table-striped">';//
            echo '<table class="table table-dark table-hover">';
            echo '<th>#</th>';
            echo '<th>Razón Social</th>';
            echo '<th>RUC</th>';
            echo '<th>Telef. / cel.</th>';
            echo '<th>Correo Electrónico</th>';
            echo '<th>Dirección</th>';

            while($fila=mysqli_fetch_assoc($registros)){
                echo '<tr>';
                    echo '<td>'.$fila['id'].'</td>';
                    echo '<td>'.$fila['razon_social'].'</td>';
                    echo '<td>'.$fila['ruc'].'</td>';
                    echo '<td>'.$fila['telefono'].'</td>';
                    echo '<td>'.$fila['correo'].'</td>';
                    echo '<td>'.$fila['direccion'].'</td>';
                echo '</tr>';

            }
            echo '</table>';


        ?>   
                


        </div>



</main>
<?php
Include("../../includes/footer.php");
?>