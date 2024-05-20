<?php include_once '../templates/header.php'; ?>

<h1 class="text-center">CONTROL DE RANCHO</h1>
<div class="row justify-content-center">
    <form action="/controladores/RANCHO/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="nombre1">NOMBRE DE QUIEN PASA A RANCHO</label>
                <input type="text" name="nombre_recibio" id="nombre_recibio" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="menu">MENÚ QUE SE LE SIRVIÓ</label>
                <input type="text" name="menu" id="menu" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="fecha">FECHA EN QUE SE SIRVIÓ</label>
                <input type="datetime" name="fecha" id="fecha" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="tiempo">TIEMPO DE COMIDA (DESAYUNO, ALMUERZO, CENA O REFACCIÓN)</label>
                <input type="text" name="tiempo" id="tiempo" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="nombre2">NOMBRE DE QUIEN SIRVIÓ</label>
                <input type="text" name="nombre_sirvio" id="nombre_sirvio" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-success w-100">Guardar</button>
            </div>
        </div>
    </form>

</div>
<?php include_once '../templates/footer.php'; ?>


   