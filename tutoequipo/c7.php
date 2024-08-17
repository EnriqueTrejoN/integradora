<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 8: Cierre de Declaración y Conexión</title>
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
    <h1>Paso 8: Cierre de Declaración y Conexión</h1>
    <p>Finalmente, se cierran la declaración preparada y la conexión a la base de datos para liberar recursos y evitar fugas de memoria. Aquí está el fragmento de código:</p>
    <code>
$stmt->close();
$conn->close();
    </code>
    <p><strong>Descripción:</strong></p>
    <ul>
        <li><code>$stmt->close();</code>: Cierra la declaración preparada <code>$stmt</code>, liberando los recursos asociados a ella.</li>
        <li><code>$conn->close();</code>: Cierra la conexión a la base de datos <code>$conn</code>, liberando los recursos asociados a la conexión.</li>
    </ul>
    <p>Este paso es crucial para liberar recursos y evitar problemas de rendimiento o fugas de memoria en la aplicación.</p>
</body>
</html>
