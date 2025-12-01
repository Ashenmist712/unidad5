<?php
require_once "funciones.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciclo Celestial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "menu.php"; ?>



<section id="explicacion" class="section-container">

    <h2 class="section-title">El Maestro del Ciclo Celestial</h2>

    <div class="explicacion-card">

        <p>
            En una aldea lejana, cada año era guiado por un Elemento Celestial que influía en las cosechas,
            el clima y el destino de sus habitantes. El anciano maestro Li conocía el secreto para determinar
            qué elemento regía cada año.
        </p>

        <p>
            Una noche, mientras las linternas flotaban sobre el río, el joven aprendiz Wen le preguntó:
        </p>

        <strong>
            Maestro Li, ¿cómo sabe usted qué elemento pertenece a cada año?
        </strong>

        <p>El maestro sonrió y respondió:</p>

        <strong>
            El cielo sigue un ciclo perfecto de cinco elementos, y cada elemento dura dos años consecutivos.
            Primero viene <strong>Madera</strong>, luego <strong>Fuego</strong>, después <strong>Tierra</strong>,
            sigue <strong>Metal</strong> y finalmente <strong>Agua</strong>. Tras los diez años, el ciclo comienza otra vez.
        </strong>

        <p>Para calcular el elemento de un año, el maestro explicó:</p>

        <ul>
            <li>Resta 4 al año que quieras.</li>
            <li>Divide el resultado entre 10 y quédate con el residuo.</li>
            <li>Ese número indica en qué parte del ciclo está el año.</li>
        </ul>

        <p>
            Así, Wen descubrió que podía calcular el elemento de cualquier año pasado o futuro con una simple operación.
        </p>

    </div>

</section>




<section id="elementos" class="section-container">
    <h2 class="section-title">Los Cinco Elementos del Ciclo Celestial</h2>

    <div class="elements-grid">

        <div class="element-card madera">
            <h3>Madera</h3>
            <p>Representa el crecimiento, la creatividad y los nuevos comienzos.</p>
            <p>Rige los años con residuo 0 y 1.</p>
        </div>

        <div class="element-card fuego">
            <h3>Fuego</h3>
            <p>Simboliza energía, transformación y pasión.</p>
            <p>Rige los años con residuo 2 y 3.</p>
        </div>

        <div class="element-card tierra">
            <h3>Tierra</h3>
            <p>Representa estabilidad, equilibrio y armonía.</p>
            <p>Rige los años con residuo 4 y 5.</p>
        </div>

        <div class="element-card metal">
            <h3>Metal</h3>
            <p>Simboliza fuerza, disciplina y precisión.</p>
            <p>Rige los años con residuo 6 y 7.</p>
        </div>

        <div class="element-card agua">
            <h3>Agua</h3>
            <p>Representa sabiduría, fluidez y adaptación.</p>
            <p>Rige los años con residuo 8 y 9.</p>
        </div>

    </div>
</section>




<section id="calculadora" class="section-container">

    <h2 class="section-title">Calcula tu Elemento Celestial</h2>

    <div class="card">

        <form method="POST" action="">
            <label>Año:</label><br>
            <input type="number" name="anio" required>
            <br>
            <button type="submit">Calcular Elemento</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $anio = $_POST["anio"];
            $elemento = obtenerElemento($anio);

            echo "<div class='resultado $elemento'>
                    Elemento del año $anio: $elemento
                  </div>";
        }
        ?>

    </div>

</section>

<?php include "footer.php"; ?>

</body>
</html>
