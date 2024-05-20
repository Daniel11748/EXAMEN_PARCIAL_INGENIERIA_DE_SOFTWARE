<?php

require '../../modelos/Control.php';

// VALIDAR INFORMACION
$_POST['ctrl_nombre_elemento'] = htmlspecialchars($_POST['ctrl_nombre_elemento']);
$_POST['ctrl_menu'] = htmlspecialchars($_POST['ctrl_menu']);
$_POST['ctrl_fecha'] = htmlspecialchars($_POST['ctrl_fecha']);
$_POST['ctrl_tiempo_comida'] = htmlspecialchars($_POST['ctrl_tiempo_comida']);
$_POST['ctrl_servidor'] = htmlspecialchars($_POST['ctrl_servidor']);

if ($_POST['ctrl_nombre_elemento'] == '' || $_POST['ctrl_menu'] == '' || $_POST['ctrl_fecha'] == '' || $_POST['ctrl_tiempo_comida'] =='' || $_POST['ctrl_servidor'== '']  ) {
    // ALERTA PARA VALIDAR DATOS
    $resultado = [
        'mensaje' => 'DEBE VALIDAR LOS DATOS',
        'codigo' => 2
    ];
} else {
    try {
        // REALIZAR CONSULTA
        $control = new Control ($_POST);
        $guardar = $control->guardar();
        $resultado = [
            'mensaje' => 'CONTROL INSERTADO CORRECTAMENTE',
            'codigo' => 1
        ];
    } catch (PDOException $pe) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR INSERTANDO A LA BD',
            'detalle' => $pe->getMessage(),
            'codigo' => 0
        ];
    } catch (Exception $e) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
            'detalle' => $e->getMessage(),
            'codigo' => 0
        ];
    }
}


$alertas = ['danger', 'success', 'warning'];


include_once '../../templates/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-lg-6 alert alert-<?= $alertas[$resultado['codigo']] ?>" role="alert">
        <?= $resultado['mensaje'] ?>
        <?= $resultado['detalle'] ?>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <a href="../../vistas/personas.php" class="btn btn-primary w-100">Volver al formulario</a>
    </div>
</div>


<?php include_once '../../templates/footer.php'; ?>