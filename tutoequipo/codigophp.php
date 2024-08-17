<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadro Comparativo del Código PHP</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Cuadro Comparativo del Código PHP</h1>
    <table>
        <thead>
            <tr>
                <th>Paso</th>
                <th>Descripción</th>
                <th>Código</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1. Inclusión de archivo de conexión</td>
                <td>Incluye el archivo que contiene la conexión a la base de datos.</td>
                <td><code>include_once '../conexion/conexion.php';</code></td>
            </tr>
            <tr>
                <td>2. Validación de datos recibidos</td>
                <td>Verifica si los parámetros <code>id</code>, <code>paquete</code>, y <code>evento</code> están presentes en la solicitud POST.</td>
                <td><code>if (!isset($_POST["id"]) || !isset($_POST["paquete"]) || !isset($_POST["evento"])) { echo '{ "error": "revisa los campos, es obligatorio"}'; exit; }</code></td>
            </tr>
            <tr>
                <td>3. Asignación de valores a variables</td>
                <td>Asigna los valores recibidos a variables locales para su uso posterior.</td>
                <td><code>$id_paquete = $_POST["id"]; $paquete = $_POST["paquete"]; $evento = $_POST["evento"];</code></td>
            </tr>
            <tr>
                <td>4. Preparación de la consulta SQL</td>
                <td>Prepara la consulta SQL para insertar datos en la tabla <code>paquetes</code>.</td>
                <td><code>$sql = "INSERT INTO paquetes (Id_tipo_de_paquetes, Id_eventos) VALUES (?, ?)"; $stmt = $conn->prepare($sql);</code></td>
            </tr>
            <tr>
                <td>5. Verificación de la preparación</td>
                <td>Verifica si la preparación de la consulta fue exitosa y maneja errores si la preparación falla.</td>
                <td><code>if ($stmt === false) { die(json_encode(array("error" => 'Error al preparar la consulta: ' . $conn->error))); }</code></td>
            </tr>
            <tr>
                <td>6. Vinculación de parámetros</td>
                <td>Vincula los valores de las variables a los parámetros en la consulta SQL.</td>
                <td><code>$stmt->bind_param('ss', $paquete, $evento);</code></td>
            </tr>
            <tr>
                <td>7. Ejecución de la consulta</td>
                <td>Ejecuta la consulta y maneja el resultado, devolviendo un mensaje de éxito o error.</td>
                <td><code>if ($stmt->execute()) { echo json_encode(array("success" => "Registro guardado correctamente")); } else { echo json_encode(array("error" => "Error al guardar el registro: " . $stmt->error)); }</code></td>
            </tr>
            <tr>
                <td>8. Cierre de declaración y conexión</td>
                <td>Cierra la declaración preparada y la conexión a la base de datos.</td>
                <td><code>$stmt->close(); $conn->close();</code></td>
            </tr>
        </tbody>
    </table>
</body>
</html>

