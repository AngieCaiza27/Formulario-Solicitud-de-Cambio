<?php 
include("../../templates/header.php"); 
include("../../../conexion.php");

if (isset($_GET['txtID'])) {
    //echo $_GET['txtID'];

    $txtID=(isset($_GET['txtID']) )?$_GET['txtID']:"";

    $sentencia=$conn2->prepare("DELETE FROM formularios WHERE id=:id ");

    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
}

$sentencia=$conn2->prepare("SELECT * FROM `formularios`");
$sentencia->execute();
$lista_servicios=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

 

<div class="card">
    <div class="card-header">
        <a
            name=""
            id=""
            class="btn btn-primary"
            href="crear.php"
            role="button"
            >Agregar registros</a
        >
        
    </div>
    <div class="card-body">
        
<div
    class="table-responsive-sm"
>
    <table
        class="table"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo del Cambio</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Tipo de cambio</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha Fin</th>
                <th scope="col">Estado</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($lista_servicios as $registros) {?>
            <tr class="">
                <td><?php echo $registros['id'];?></td>
                <td><?php echo $registros['titulo_del_cambio'];?></td>
                <td><?php echo $registros['solicitante_del_cambio'];?></td>
                <td><?php echo $registros['tipo_de_cambio'];?></td>
                <td><?php echo $registros['fecha_inicio_del_cambio'];?></td>
                <td><?php echo $registros['fecha_fin_del_cambio'];?></td>

                <td>
                <?php
                if ($registros['estado_cambio'] == "Pendiente") {
                    // Si el estado es "Pendiente", muestra el texto en amarillo.
                    echo '<span style="color: darkgoldenrod;">' . $registros['estado_cambio'] . '</span>';
                }
                
                if ($registros['estado_cambio'] == "Aceptado") {
                    // Si el estado es "Aceptado", muestra el texto en verde.
                    echo '<span style="color: green;">' . $registros['estado_cambio'] . '</span>';
                }
                
                if ($registros['estado_cambio'] == "Rechazado") {
                    // Si el estado es "Rechazao", muestra el texto en rojo.
                    echo '<span style="color: red;">' . $registros['estado_cambio'] . '</span>';
                } 
                ?>
                </td>
                

                <td>

                <a
                    name=""
                    id=""
                    class="btn btn-info"
                    href="editar.php?txtID=<?php echo $registros['id']; ?> "
                    role="button"
                    >    Ver   </a
                >
                
                    |

                    <a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="index.php?txtID=<?php echo $registros['id']; ?> "
                    role="button"
                    >Eliminar</a
                >
                

               
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<style>
    .estado-pendiente {
        color: yellow;
    }
    .estado-aceptado {
        color: green;
    }
    .estado-rechazado {
        color: red;
    }
</style>


<?php include("../../templates/footer.php"); ?>
