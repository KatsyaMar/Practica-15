<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X</title>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
</head>
<body>
<section class="wrapper">
<header>
    <h1 class="logo"><a href="index.html"StemPhp></a></h1>
    <nav>
        <ul><li><a href="index.php" class ="current">Inicio</a></li></ul>
    </nav>
</header>
<section id="contenedor">
    <section class="problema">
        <h2>Problema</h2>
        <p>Un panel fotovoltaico entrega una potencia útil de 75 000 W. Suponiendo que la densidad de radiación sea de 1000 W/m<sup>2</sup> y el rendimiento del panel del 50%, calcular la superficie del panel.</p>
    </section>
    <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
            <img class="imgProblema" src="images/descarga (1).jpg" alt="Esquema del problema">
        </center>
    </section>
    <section class="formulas">
        <h2>Fórmulas</h2>
        <p>Q = K * t * S * r</p>
        <ul>
            <li>Q = Energía generada</li>
            <li>K = Coeficiente de radiación</li>
            <li>S = Área, cm<sup>2</sup></li>
            <li>t = Tiempo, en minutos</li>
            <li>r = Rendimiento</li>
        </ul>
    </section>
    <section class="datos">
        <h2>Datos:</h2>
        <ul>
            <li>Q = 75,000 W </li>
            <li>K = 1,000 W/m<sup>2</sup> </li>
            <li>t = 1 (consideramos 1 segundo como unidad de cálculo para este caso)</li>
            <li>r = 0.5</li>
        </ul>
    </section>
    <section class="calculos">
        <h2>Solución</h2>
       <?php
        function calcular_area() {
            // Definimos los datos iniciales
            $potencia_util = 75000; // en W
            $rendimiento = 0.5; // rendimiento del panel
            $densidad_radiacion = 1000; // en W/m^2

            // Calculamos la potencia real recibida por el panel
            $potencia_real = $potencia_util / $rendimiento;

            // Calculamos el área del panel
            $area = $potencia_real / $densidad_radiacion;

            return $area;
        }
       ?>
    </section>
    <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
        <?php
           print "<h1>El área del panel es = " . calcular_area() . " m²</h1>";
        ?>
        </div>
    </section>
</section>
<footer class="pie">
    Creative Commons versión 3.0 SciSoft 2024
</footer>
</section>
</body>
</html>
