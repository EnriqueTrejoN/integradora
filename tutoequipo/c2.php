<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 2: Asignación de Valores a Variables</title>
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
    <h1>Paso 2: Asignación de Valores a Variables</h1>
    <p>Después de validar que todos los campos necesarios están presentes en la solicitud POST, se asignan los valores recibidos a variables para su uso posterior en el script. Aquí está el fragmento de código:</p>
    <code>
$id_paquete = $_POST["id"];
$paquete = $_POST["paquete"];
$evento = $_POST["evento"];
    </code>
    <p><strong>Descripción:</strong></p>
    <ul>
        <li><code>$id_paquete = $_POST["id"];</code>: Asigna el valor del parámetro <code>id</code> recibido en la solicitud POST a la variable <code>$id_paquete</code>. Esta variable almacenará el identificador del paquete.</li>
        <li><code>$paquete = $_POST["paquete"];</code>: Asigna el valor del parámetro <code>paquete</code> recibido en la solicitud POST a la variable <code>$paquete</code>. Esta variable almacenará el nombre o tipo del paquete.</li>
        <li><code>$evento = $_POST["evento"];</code>: Asigna el valor del parámetro <code>evento</code> recibido en la solicitud POST a la variable <code>$evento</code>. Esta variable almacenará el identificador o detalles del evento asociado.</li>
    </ul>
    <p>Asignar los valores a variables facilita su uso en las siguientes etapas del script, como la preparación y ejecución de la consulta SQL. Además, hace que el código sea más legible y mantenible.</p>
</body>
</html>
