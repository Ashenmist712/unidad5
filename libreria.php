<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="libreriaStyle.css"> 
    <title>Libreria </title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">

                <div class="card-custom">

                    <h1 class="mb-3 text-center">Entrega de libros</h1>

                    <ul>
                        <li>Multa base: $5 por libro </li>
                        <li>Recargo: $2 por día de retraso por libro</li>
                        <li>Descuento del 20% al regresar todos los libros el mismo día.</li>
                    </ul>

                    <hr class="mb-4">

                    <form action="calculadoraLibreria.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="libros" class="form-label">Ingresa la cantidad de libros retrasados</label>
                            <input type="number" class="form-control" id="libros" name="libros" required>
                        </div>

                        <div class="mb-3">
                            <label for="retraso" class="form-label">Días de retraso</label>
                            <input type="number" class="form-control" id="retraso" name="retraso" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label d-block">¿Entregará todos los libros hoy?</label>
                            <div class="btn-group w-100" role="group">

                                <input type="radio" class="btn-check" name="seleccion" id="si" value="SI" checked>
                                <label class="btn btn-outline-light" for="si">SI</label>

                                <input type="radio" class="btn-check" name="seleccion" id="no" value="NO">
                                <label class="btn btn-outline-light" for="no">NO</label>
                            </div>
                        </div>

                        <button class="btn btn-light w-100 fw-bold">Capturar</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</body>
</html>
