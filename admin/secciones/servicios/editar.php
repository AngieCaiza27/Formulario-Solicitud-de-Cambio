<?php 

include("../../../conexion.php");
include("../../templates/header.php"); 

if (isset($_GET['txtID'])) {
    // Recuperar los datos del ID correspondiente o seleccionado

    $txtID=(isset($_GET['txtID']) )?$_GET['txtID']:"";

    $sentencia=$conn2->prepare("SELECT * FROM formularios WHERE id=:id ");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $icono=$registro['titulo_del_cambio'];
    $titulo=$registro['solicitante_del_cambio'];
    $descripcion=$registro['tipo_de_cambio'];
    $propietario=$registro['propietario_del_cambio'];
    $reponsable=$registro['responsable_del_cambio'];
    $serviciocambio=$registro['servicios_afectados'];
    $razon=$registro['razon_del_cambio'];
    $descambio=$registro['descripcion_del_cambio'];
    $aprobador=$registro['aprobador'];
}

if($_POST){
    print_r($_POST);

    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $icono=(isset($_POST['icono']))?$_POST['icono']:"";
    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $propietario=(isset($_POST['propietario']))?$_POST['propietario']:"";
    $reponsable=(isset($_POST['responsable']))?$_POST['responsable']:"";
    $serviciocambio=(isset($_POST['serviciocambio']))?$_POST['serviciocambio']:"";
    $razon=(isset($_POST['razon']))?$_POST['razon']:"";
    $descambio=(isset($_POST['descambio']))?$_POST['descambio']:"";
    $aprobador=(isset($_POST['aprobador']))?$_POST['aprobador']:"";

    
    $sentencia=$conexion->prepare("UPDATE formularios 
    SET 
    =:icono,
    titulo=:titulo,
    descripcion=:descripcion
    propietario=:propietario
    responsable=:responsable
    serviciocambio=:serviciocambio
    razon=:razon
    descambio=:descambio
    aprobador=:aprobador

    WHERE id=:id ");
    $sentencia->bindParam(":titulo_del_cambio",$responsable);
    $sentencia->bindParam(":titulo_del_cambio",$propietario);
    $sentencia->bindParam(":titulo_del_cambio",$icono);
    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $mensaje="Registro modificado con éxito";
    header("Location:index.php?mensaje=".$mensaje);
}

?>


<div class="card">
    <div class="card-header">Editando la información de servicios</div>
    <div class="card-body">
        
<form action="" entype="multipart/form-data" method="post">

<div class="mb-3">
    <label for="txtID" class="form-label">ID:</label>
    <input
        readonly
        value="<?php echo $txtID;?>"
        type="text"
        class="form-control"
        name="txtID"
        id="txtID"
        aria-describedby="helpId"
        placeholder="ID"
    />
</div>


<div class="mb-3">
    <label for="icono" class="form-label">Titulo del cambio</label>
    <input
        value="<?php echo $icono;?>"
        type="text"
        class="form-control"
        name="icono"
        id="icono"
        aria-describedby="helpId"
        placeholder="Icono"
    />
</div>

<div class="mb-3">
    <label for="titulo" class="form-label">Solicitante:</label>
    <input
        value="<?php echo $titulo;?>"
        type="text"
        class="form-control"
        name="titulo"
        id="titulo"
        aria-describedby="helpId"
        placeholder="Título"
    />
</div>

<div class="mb-3">
    <label for="descripcion" class="form-label">Tipo de Cambio:</label>
    <input
        value="<?php echo $descripcion;?>"
        type="text"
        class="form-control"
        name="descripcion"
        id="descripcion"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Tipo de Propietario:</label>
    <input
        value="<?php echo $propietario;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="responsable" class="form-label">Responsable:</label>
    <input
        value="<?php echo $reponsable;?>"
        type="text"
        class="form-control"
        name="responsable"
        id="responsable"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>
<button
    type="submit"
    class="btn btn-success"
>
    Actualizar
</button>

<a
    name=""
    id=""
    class="btn btn-primary"
    href="index.php"
    role="button"
    >Cancelar</a
>



</form>

    </div>
    <div class="card-footer text-muted">


    </div>
</div>

<?php include("../../templates/footer.php"); ?>






