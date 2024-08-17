<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 6: Vinculación de Parámetros</title>
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
    <h1>Paso 6: Vinculación de Parámetros</h1>
    <p>En este paso, se vinculan los valores de las variables a los parámetros en la consulta SQL. Esto es necesario para sustituir los marcadores de posición en la consulta. Aquí está el fragmento de código:</p>
    <code>
$stmt->bind_param('ss', $paquete, $evento);
    </code>
    <p><strong>Descripción:</strong></p>
    <ul>
        <li><code>$stmt->bind_param('ss', $paquete, $evento);</code>: Vincula los valores de las variables <code>$paquete</code> y <code>$evento</code> a los parámetros en la consulta SQL. El primer argumento de <code>bind_param()</code> indica el tipo de datos de los parámetros: <code>'ss'</code> significa que ambos parámetros son strings.</li>
    </ul>
    <p>Esta vinculación asegura que los valores sean correctamente sustituidos en la consulta y que se manejen adecuadamente los tipos de datos.</p>
</body>
</html>
