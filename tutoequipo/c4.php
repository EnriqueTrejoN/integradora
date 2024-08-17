<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 5: Verificación de la Preparación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        code {
            display: block;
            white-space: pre-wrap;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Paso 5: Verificación de la Preparación</h1>
    <p>Después de preparar la consulta SQL, es crucial verificar si la preparación fue exitosa. Si la preparación falla, se debe manejar el error adecuadamente. Aquí está el fragmento de código:</p>
    <code>
if ($stmt === false) {
    die(json_encode(array("error" => 'Error al preparar la consulta: ' . $conn->error)));
}
    </code>
    <p><strong>Descripción:</strong></p>
    <ul>
        <li><code>if ($stmt === false)</code>: Comprueba si la preparación de la consulta falló. Si <code>$stmt</code> es <code>false</code>, significa que ocurrió un error.</li>
        <li><code>die(json_encode(array("error" => 'Error al preparar la consulta: ' . $conn->error))));</code>: Si la preparación falló, se envía un mensaje de error en formato JSON y se detiene la ejecución del script utilizando <code>die()</code>. <code>$conn->error</code> proporciona detalles sobre el error ocurrido.</li>
    </ul>
    <p>Esta verificación asegura que cualquier problema con la preparación de la consulta se maneje antes de continuar.</p>
</body>
</html>
