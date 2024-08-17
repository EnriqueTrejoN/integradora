<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 4: Preparación de la Consulta SQL</title>
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
    <h1>Paso 4: Preparación de la Consulta SQL</h1>
    <p>En este paso, se prepara la consulta SQL que se utilizará para insertar datos en la base de datos. La consulta SQL se define con parámetros que serán sustituidos por los valores reales durante la ejecución. Aquí está el fragmento de código:</p>
    <code>
$sql = "INSERT INTO paquetes (Id_tipo_de_paquetes, Id_eventos) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
    </code>
    <p><strong>Descripción:</strong></p>
    <ul>
        <li><code>$sql</code>: Define la consulta SQL. Los signos de interrogación (<code>?</code>) son marcadores de posición para los valores que se insertarán.</li>
        <li><code>$stmt = $conn->prepare($sql);</code>: Prepara la consulta SQL para su ejecución. La función <code>prepare()</code> del objeto de conexión <code>$conn</code> devuelve una declaración preparada que se almacena en la variable <code>$stmt</code>.</li>
    </ul>
    <p>Esta preparación es importante para evitar problemas como inyecciones SQL y mejorar la seguridad y eficiencia de la consulta.</p>
</body>
</html>
