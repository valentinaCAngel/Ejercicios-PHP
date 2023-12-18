<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Promedio de Notas</title>
</head>
<body>
    <h1>Calculadora de Promedio de Notas</h1>
    <form method="post" action="">
        <label for="totalAlumnos">Número de alumnos:</label>
        <input type="number" id="totalAlumnos" name="totalAlumnos" required><br>
        <br>
        <?php
        if (isset($_POST['totalAlumnos'])) {
            $totalAlumnos = intval($_POST['totalAlumnos']);
            $totalPasaron = 0;
            $totalPerdieron = 0;
            $sumaPromedios = 0;

            for ($i = 1; $i <= $totalAlumnos; $i++) {
                echo "<h2>Alumno $i</h2>";
                echo "<label for='nombreAlumno$i'>Nombre:</label>";
                echo "<input type='text' id='nombreAlumno$i' name='nombreAlumno$i' required><br>";
                echo "<label for='materiaAlumno$i'>Materia:</label>";
                echo "<input type='text' id='materiaAlumno$i' name='materiaAlumno$i' required><br>";
                echo "<label for='nota1Alumno$i'>Nota 1:</label>";
                echo "<input type='number' step='0.1' id='nota1Alumno$i' name='nota1Alumno$i' required><br>";
                echo "<label for='nota2Alumno$i'>Nota 2:</label>";
                echo "<input type='number' step='0.1' id='nota2Alumno$i' name='nota2Alumno$i' required><br>";
                echo "<label for='nota3Alumno$i'>Nota 3:</label>";
                echo "<input type='number' step='0.1' id='nota3Alumno$i' name='nota3Alumno$i' required><br>";
            }
        }
        ?>
        <br>
        <input type="submit" value="Calcular Promedios y Resultados">
    </form>

    <?php
    
    if (isset($_POST['totalAlumnos'])) {
        $totalAlumnos = intval($_POST['totalAlumnos']);
    
        for ($i = 1; $i <= $totalAlumnos; $i++) {
            $nombreAlumno = $_POST["nombreAlumno$i"];
            $materiaAlumno = $_POST["materiaAlumno$i"];
            $nota1Alumno = floatval($_POST["nota1Alumno$i"]);
            $nota2Alumno = floatval($_POST["nota2Alumno$i"]);
            $nota3Alumno = floatval($_POST["nota3Alumno$i"]);
    
            $promedio = ($nota1Alumno + $nota2Alumno + $nota3Alumno) / 3;
            $sumaPromedios += $promedio;

            echo "<h3>Resultados para $nombreAlumno en la materia $materiaAlumno:</h3>";
            echo "Promedio: $promedio<br>";
            
            if ($promedio >= 35) {
                echo "Resultado: Pasó<br>";
                $totalPasaron++;
            } else {
                echo "Resultado: Perdió<br>";
                $totalPerdieron++;
            }
            echo "<hr>";
        }
    
        echo "<h2>Resumen:</h2>";
        echo "Total de alumnos: $totalAlumnos<br>";
        echo "Total de alumnos que pasaron: $totalPasaron<br>";
        echo "Total de alumnos que perdieron: $totalPerdieron<br>";
        if ($totalAlumnos > 0) {
            $promedioTotal = $sumaPromedios / $totalAlumnos;
            echo "Promedio de todos los alumnos: $promedioTotal<br>";
        } else {
            echo "No se ingresaron alumnos, no se puede calcular el promedio del curso.";
        }
    }
    ?>
</body>
</html>