<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 7: Ejecución de la Consulta</title>
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
    <h1>Paso 7: Ejecución de la Consulta</h1>
    <p>Una vez que la consulta está preparada y los parámetros vinculados, se ejecuta la consulta. Dependiendo del resultado, se envía un mensaje de éxito o error. Aquí está el fragmento de código:</p>
    <code>
if ($stmt->execute()) {
    echo json_encode(array("success" => "Registro guardado correctamente"));
} else {
    echo json_encode(array("error" => "Error al guardar el registro: " . $stmt->error));
}
    </code>
    <p><strong>Descripción:</strong></p>
    <ul>
        <li><code>if ($stmt->execute())</code>: Ejecuta la consulta preparada. Si la ejecución es exitosa, el bloque de código dentro de este <code>if</code> se ejecuta.</li>
        <li><code>echo json_encode(array("success" => "Registro guardado correctamente"));</code>: Si la consulta se ejecuta correctamente, se devuelve un mensaje de éxito en formato JSON.</li>
        <li><code>else</code>: Si la ejecución falla, se ejecuta el bloque de código dentro del <code>else</code>.</li>
        <li><code>echo json_encode(array("error" => "Error al guardar el registro: " . $stmt->error));</code>: Devuelve un mensaje de error en formato JSON con detalles sobre el problema.</li>
    </ul>
    <p>Este paso maneja la respuesta del servidor al cliente según el resultado de la operación en la base de datos.</p>
</body>
</html>
