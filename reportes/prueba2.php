<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadro Comparativo</title>
    <style>
        /* Estilos de ejemplo para el cuadro comparativo */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        th {
            font-weight: bold;
        }

        /* Estilos para los encabezados */
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Cuadro Comparativo: Explicación de las partes del código</h1>

    <!-- Crear la tabla -->
    <table>
        <thead>
            <tr>
                <th>Concepto</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <!-- Fila 1: Definición de la función fnGuardar() -->
            <tr>
                <td>function fnGuardar()</td>
                <td>Definición de la función fnGuardar, que recoge los datos del formulario, los envía al servidor y maneja la respuesta.</td>
            </tr>
            <!-- Fila 2: Buscar el elemento HTML con id 'myForm' -->
            <tr>
                <td>var form = document.getElementById('myForm');</td>
                <td>Busca un elemento HTML con el id 'myForm'. Si no se encuentra, se muestra un mensaje de error en la consola y se sale de la función.</td>
            </tr>
            <!-- Fila 3: Crear un objeto FormData con todos los campos del formulario -->
            <tr>
                <td>var formData = new FormData(document.getElementById('myForm'));</td>
                <td>Crea un objeto FormData con todos los campos del formulario 'myForm', facilitando el envío de datos al servidor.</td>
            </tr>
            <!-- Fila 4: Enviar una solicitud HTTP al servidor utilizando ajax -->
            <tr>
                <td>$(&hellip;)</td>
                <td>Utiliza la función ajax de jQuery para enviar una solicitud HTTP al servidor con varios parámetros importantes como url, type, data, processData y contentType.</td>
            </tr>
            <!-- Fila 5: Función que se ejecuta al tener éxito la solicitud -->
            <tr>
                <td>success: function (response) { &hellip;}</td>
                <td>Función que se ejecuta al tener éxito la solicitud, intentando analizar la respuesta como JSON y mostrando un mensaje de éxito.</td>
            </tr>
            <!-- Fila 6: Bloque de código que intenta analizar la respuesta como JSON -->
            <tr>
                <td>try { &hellip; } catch (e) { &hellip;}</td>
                <td>Bloque de código que intenta analizar la respuesta como JSON. Captura excepciones si ocurre un error durante el análisis.</td>
            </tr>
            <!-- Fila 7: Función que se ejecuta cuando la solicitud falla -->
            <tr>
                <td>error: function (xhr) { &hellip;}</td>
                <td>Función que se ejecuta cuando la solicitud falla, mostrando un mensaje de error con la biblioteca SweetAlert.</td>
            </tr>
        </tbody>
    </table>

</body>
</html>