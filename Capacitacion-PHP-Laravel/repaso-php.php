<?php
// repaso general para php 
// repaso de variables
$nombre = "Johan";     // string
$edad = 23;            // entero
$promedio = 4.5;       // float
$activo = true;        // Booleano

// Mostrar información
echo "<h2>Información del estudiante</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Promedio actual: " . $promedio . "<br>";

// condicionales, para calcular el promedio
if ($promedio >= 4.0) {
    echo "Estado: Aprobado <br>";
} else {
    echo "Estado: Reprobado <br>";
}

// repaso de una lista
$notas = [4.2, 3.8, 4.5, 5.0]; // array indexado

echo "<h3>Notas:</h3>";
//esto era para recorrer
foreach ($notas as $nota) {
    echo "Nota: $nota <br>";
}

// funcion para sacar el promedio
function calcularPromedio($listaNotas) {
    $suma = 0;
    $cantidad = count($listaNotas); // Cuenta elementos del array
    
    foreach ($listaNotas as $nota) {
        $suma += $nota;
    }

    return $suma / $cantidad;
}

$promedioCalculado = calcularPromedio($notas);

echo "<h3>Promedio calculado con función: $promedioCalculado</h3>";


// formulario para simular una entrada
?>

<hr>

<h2>Agregar nueva nota</h2>

<form method="POST">
    <input type="number" step="0.1" name="nueva_nota" required>
    <button type="submit">Agregar</button>
</form>

<?php
// para validar algo este solo es un ejemplo
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // isset verifica que el valor exista
    if (isset($_POST["nueva_nota"])) {
        $nuevaNota = floatval($_POST["nueva_nota"]);

        echo "<br>Nota ingresada: $nuevaNota";

        // validación basica
        if ($nuevaNota >= 0 && $nuevaNota <= 5) {
            echo "<br>Nota válida";
        } else {
            echo "<br>Nota fuera de rango";
        }
    }
}

// en php se podia incluir otro php llamandolo con includo <?php include nombreArchivo.php ? >
?>