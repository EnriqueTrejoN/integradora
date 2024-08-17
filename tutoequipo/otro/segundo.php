<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explicación de la Función `fnGuardarEdicion`</title>
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
    <h1>Explicación de la Función `fnGuardarEdicion`</h1>
    <p>La función <code>fnGuardarEdicion</code> se utiliza para enviar los datos de edición del formulario a un servidor usando AJAX. Aquí está el código:</p>
    <code>
function fnGuardarEdicion() {
    var formData = new FormData(document.getElementById('editForm'));

    if (!isFormValid('editForm')) {
        return;
    }

    // Mostrar los datos que se van a enviar (opcional)
    formData.forEach((value, key) => {
        console.log(key + ": " + value);
    });

    $.ajax({
        url: 'usuarioupdate.php', // Asegúrate de que esta URL sea correcta
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result); // Verifica la respuesta del servidor
            try {
                var jsonResponse = JSON.parse(result);
                if (jsonResponse.success) {
                    alert('Producto actualizado correctamente');
                    $('#editModal').modal('hide');
                    location.reload(); // Cierra el modal después de guardar
                    // Aquí puedes actualizar la interfaz de usuario según sea necesario
                } else if (jsonResponse.error) {
                    alert(jsonResponse.error);
                }
            } catch (e) {
                console.error('No se pudo analizar JSON:', e);
                console.log('Respuesta:', result);
            }
        },
        error: function (xhr) {
            alert('Ocurrió un error: ' + xhr.status + ' ' + xhr.statusText);
        }
    });
}
    </code>
    <h2>Descripción:</h2>
    <ol>
        <li><code>var formData = new FormData(document.getElementById('editForm'));</code>
            <ul>
                <li>Crea un objeto <code>FormData</code> con los datos del formulario con ID <code>editForm</code>.</li>
            </ul>
        </li>
        <li><code>if (!isFormValid('editForm')) { return; }</code>
            <ul>
                <li>Valida el formulario. Si no es válido, detiene la ejecución de la función.</li>
            </ul>
        </li>
        <li><code>formData.forEach((value, key) => { console.log(key + ": " + value); });</code>
            <ul>
                <li>Itera sobre los datos del <code>FormData</code> y los muestra en la consola. Esto es opcional y sirve para depuración.</li>
            </ul>
        </li>
        <li><code>$.ajax({...});</code>
            <ul>
                <li>Envía los datos del formulario a través de una solicitud AJAX.</li>
                <li><code>url</code>: Especifica la URL del archivo PHP que procesa los datos (`usuarioupdate.php`).</li>
                <li><code>type</code>: Define el método HTTP para la solicitud (POST).</li>
                <li><code>data</code>: Los datos del formulario se envían como <code>FormData</code>.</li>
                <li><code>processData</code> y <code>contentType</code>: Se establecen en <code>false</code> para manejar <code>FormData</code> correctamente.</li>
                <li><code>success</code>: Función que se ejecuta si la solicitud es exitosa. Analiza la respuesta y muestra alertas según el resultado. Cierra el modal y recarga la página si la actualización es exitosa.</li>
                <li><code>error</code>: Función que se ejecuta si ocurre un error en la solicitud AJAX, mostrando un mensaje de alerta.</li>
            </ul>
        </li>
    </ol>
</body>
</html>
