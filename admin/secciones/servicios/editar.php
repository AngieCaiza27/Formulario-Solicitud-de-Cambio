<?php
include("../../../conexion.php");
include("../../templates/header.php");

if (isset($_GET['txtID'])) {
    $txtID = $_GET['txtID'];

    $sentencia = $conn2->prepare("SELECT * FROM formularios WHERE id=:id ");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_ASSOC);

    if (!$registro) {
        echo "No se encontró el registro con el ID proporcionado.";
        exit; 
    }

    $icono = $registro['titulo_del_cambio'];
    $titulo = $registro['solicitante_del_cambio'];
    $descripcion = $registro['tipo_de_cambio'];
    $propietario = $registro['propietario_del_cambio'];
    $responsable = $registro['responsable_del_cambio'];
    $serviciocambio = $registro['servicios_afectados'];
    $razon = $registro['razon_del_cambio'];
    $descambio = $registro['descripcion_del_cambio'];
    $aprobador = $registro['aprobador'];

    $impacto = $registro['impacto'];
    $urgencia = $registro['urgencia'];
    $prioridad = $registro['prioridad'];
    $riesgo = $registro['riesgo_del_cambio'];
    $fecha_inicio = $registro['fecha_inicio_del_cambio'];
    $fecha_fin = $registro['fecha_fin_del_cambio'];
    $estado = $registro['estado_cambio'];
}

if ($_POST) {
    if (isset($_POST['btnAceptar'])) {
        $estado = "Aceptado";
    } elseif (isset($_POST['btnRechazar'])) {
        $estado = "Rechazado";
    } elseif (isset($_POST['btnPendiente'])) {
        $estado = "Pendiente";
    }

    $txtID = isset($_POST['txtID']) ? $_POST['txtID'] : "";

    $sentencia = $conn2->prepare("UPDATE formularios SET estado_cambio=:estado WHERE id=:id");
    $sentencia->bindParam(":estado", $estado);
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    header("Location: index.php");
    exit;
}
?>




<div class="card">
    <div class="card-header">Solicitud de cambio</div>
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
    <label for="icono" class="form-label">Título del cambio</label>
    <input
        readonly
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
    readonly
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
    readonly
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
    <label for="propietario" class="form-label">Impacto:</label>
    <input
    readonly
        value="<?php echo $impacto;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="responsable" class="form-label">Urgencia:</label>
    <input
    readonly
        value="<?php echo $urgencia;?>"
        type="text"
        class="form-control"
        name="responsable"
        id="responsable"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Prioridad:</label>
    <input
    readonly
        value="<?php echo $prioridad;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Riesgo del cambio:</label>
    <input
    readonly
        value="<?php echo $riesgo;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Propietario del Cambio:</label>
    <input
    readonly
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
    <label for="propietario" class="form-label">Responsable del cambio:</label>
    <input
    readonly
        value="<?php echo $responsable;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Fecha Inicio:</label>
    <input
    readonly
        value="<?php echo $fecha_inicio;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Fecha Fin:</label>
    <input
    readonly
        value="<?php echo $fecha_fin;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Servicios afectados:</label>
    <input
    readonly
        value="<?php echo $serviciocambio;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Razón del cambio:</label>
    <input
    readonly
        value="<?php echo $razon;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Descripción del cambio:</label>
    <input
    readonly
        value="<?php echo $descambio;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Aprobado por:</label>
    <input
    readonly
        value="<?php echo $aprobador;?>"
        type="text"
        class="form-control"
        name="propietario"
        id="propietario"
        aria-describedby="helpId"
        placeholder="Descripción"
    />
</div>

<div class="mb-3">
    <label for="propietario" class="form-label">Estado:</label>
    <input
    readonly
        value="<?php echo $estado;?>"
        type="text"
        class="form-control"
        name="estado"
        id="estado"
        aria-describedby="helpId"
        placeholder="Estado"
    />
</div>


<button
    type="submit"
    class="btn btn-success"
    name="btnAceptar"
>
    Aprobar
</button>

<button
    type="submit"
    class="btn btn-danger"
    name="btnRechazar"
    id="btnRechazar"
>
    Rechazar
</button>

<button
    type="submit"
    class="btn btn-secondary"
    name="btnPendiente"
    id="btnPendiente"
>
    Mantener Pendiente
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






