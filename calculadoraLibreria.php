<?php
$libros_retrasados = $_POST['libros'];
$dias_retraso = $_POST['retraso'];
$entrega = $_POST['seleccion']; 

$cuenta = (($libros_retrasados * 5) + (($libros_retrasados * $dias_retraso) * 2));
$Cuenta_total;

if ($entrega == 'SI') {
    $Cuenta_total = $cuenta - ($cuenta * .20);
} else {
    $Cuenta_total = $cuenta;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="libreriaStyle.css">
</head>
<body>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
            
            <div class="card-custom">

                <h2 class="text-center mb-3">Resultado de la transacción</h2>

                <p><strong>Libros retrasados:</strong> <?= $libros_retrasados ?></p>
                <p><strong>Días de retraso:</strong> <?= $dias_retraso ?></p>
                <p><strong>Entrega completa hoy:</strong> <?= ($entrega == 'SI') ? 'SI' : 'NO' ?></p>

                <hr>

                <h4 class="text-center">Total a pagar:  
                    <span class="fw-bold">$<?= number_format($Cuenta_total, 2) ?></span>
                </h4>

                <div class="text-center mt-4">
                    <a href="libreria.php" class="btn btn-light fw-bold w-100">Regresar</a>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
