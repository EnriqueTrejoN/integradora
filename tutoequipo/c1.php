<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadro Comparativo: Validación de Datos Recibidos</title>
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
        code {
            display: block;
            white-space: pre-wrap;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 4px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Cuadro Comparativo: Validación de Datos Recibidos</h1>
    <table>
        <thead>
            <tr>
                <th>Parte del Código</th>
                <th>Descripción</th>
                <th>Código</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Condición if</td>
                <td>Verifica si alguno de los parámetros esperados no está definido o es null.</td>
                <td><code>if (!isset($_POST["id"]) || !isset($_POST["paquete"]) || !isset($_POST["evento"])) {</code></td>
            </tr>
            <tr>
                <td>Negación y isset</td>
                <td>La función <code>isset()</code> verifica si una variable está definida y no es null. El operador <code>!</code> niega el resultado.</td>
                <td><code>!isset($_POST["id"])</code><br><code>!isset($_POST["paquete"])</code><br><code>!isset($_POST["evento"])</code></td>
            </tr>
            <tr>
                <td>Operador lógico OR</td>
                <td>El operador <code>||</code> asegura que la condición sea verdadera si al menos una de las sub-condiciones es verdadera.</td>
                <td><code>||</code></td>
            </tr>
            <tr>
                <td>Mensaje de error</td>
                <td>Si la validación falla, se envía un mensaje JSON indicando que los campos obligatorios deben ser revisados.</td>
                <td><code>echo '{ "error": "revisa los campos, es obligatorio"}';</code></td>
            </tr>
            <tr>
                <td>Detener la ejecución</td>
                <td>La función <code>exit</code> detiene la ejecución del script si los parámetros no están presentes.</td>
                <td><code>exit;</code></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
