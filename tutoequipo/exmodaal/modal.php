<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explicación del Formulario</title>
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
        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Explicación del Formulario HTML</h1>
    <p>A continuación se explica en detalle el código del formulario HTML:</p>
    
    <code>
<form id="myForm" action="usuariosave.php" method="post">
    <input type="hidden" id="Id_usuario" name="Id_usuario">
    <div class="mb-3">
        <label for="nombre_usuario" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required pattern="[A-Za-zÀ-ÿ]+([ ]?[A-Za-zÀ-ÿ]+)" title="No se permiten primeros los espacios ni numeros">
        <div class="invalid-feedback">Por favor ingrese un Nombre.</div>
    </div>
    <div class="mb-3">
        <label for="ap_pat_usuario" class="form-label">Apellido Paterno:</label>
        <input type="text" class="form-control" id="ap_pat_usuario" name="ap_pat_usuario" required pattern="[A-Za-zÀ-ÿ]+([ ]?[A-Za-zÀ-ÿ]+)" title="No se permiten espacios al principio ni numeros">
        <div class="invalid-feedback">Por favor ingrese el primer Apellido.</div>
    </div>
    <div class="mb-3">
        <label for="ap_mat_usuario" class="form-label">Apellido Materno:</label>
        <input type="text" class="form-control" id="ap_mat_usuario" name="ap_mat_usuario" required pattern="[A-Za-zÀ-ÿ]+([ ]?[A-Za-zÀ-ÿ]+)" title="No se permiten espacios al principio ni numeros">
        <div class="invalid-feedback">Por favor ingrese el segundo Apellido.</div>
    </div>
    <div class="mb-3">
        <label for="numero_tel" class="form-label">Telefono:</label>
        <input type="text" class="form-control" id="numero_tel" name="numero_tel" pattern="\d{10}" title="El número de teléfono debe tener 10 dígitos y solo números." placeholder="1234567890" required>
        <div class="invalid-feedback">El número de teléfono debe tener 10 dígitos y solo números.</div>
    </div>
    <div class="mb-3">
        <label for="codigo_postal" class="form-label">Código Postal:</label>
        <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" min="0" step="1" placeholder="0" required>
        <div class="invalid-feedback">El número debe ser mayor o igual a 0.</div>
    </div>
    <div class="mb-3">
        <label for="correo_electronico" class="form-label">Correo Electrónico:</label>
        <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
    </div>
    <div class="mb-3">
        <label for="contra" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="contra" name="contra" pattern=".{8,}" title="La contraseña debe tener al menos 8 caracteres." required>
        <div class="invalid-feedback">Por favor ingrese una contraseña de 8 caracteres.</div>
    </div>
    <div class="mb-3">
        <label for="Id_ciudad" class="form-label">Ciudad:</label>
        <select class="form-control" id="Id_ciudad" name="Id_ciudad" required>
            <option value="">Ciudades...</option>
            <!-- Aquí se visualizarán las opciones del input ciudad -->
            <?php include "opciones/selectciudad.php"; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="Id_tipo_de_usuario" class="form-label">Tipo de Usuario:</label>
        <select class="form-control" id="Id_tipo_de_usuario" name="Id_tipo_de_usuario" required>
            <option value="">Usuarios...</option>
            <!-- Aquí se visualizarán las opciones del input tipo de usuario -->
            <?php include "opciones/selectipodeusuario.php"; ?>
        </select>
    </div>
</form>
    </code>
    
    <h2>Descripción del Código:</h2>
    <ol>
        <li>
            <strong>Inicio del Formulario:</strong>
            <p><code>&lt;form id="myForm" action="usuariosave.php" method="post"&gt;</code></p>
            <ul>
                <li>El formulario se define con el atributo <code>id="myForm"</code>, lo cual permite identificarlo en JavaScript. El atributo <code>action</code> indica la URL a la que se enviarán los datos del formulario, en este caso, <code>usuariosave.php</code>. El atributo <code>method="post"</code> indica que los datos se enviarán usando el método POST.</li>
            </ul>
        </li>
        <li>
            <strong>Campo Oculto:</strong>
            <p><code>&lt;input type="hidden" id="Id_usuario" name="Id_usuario"&gt;</code></p>
            <ul>
                <li>Este campo <code>hidden</code> no es visible en el formulario pero se utiliza para enviar un valor, en este caso <code>Id_usuario</code>, al servidor.</li>
            </ul>
        </li>
        <li>
            <strong>Campos de Texto para Nombre y Apellidos:</strong>
            <p><code>&lt;div class="mb-3"&gt; ... &lt;/div&gt;</code></p>
            <ul>
                <li>Cada campo de texto para nombre y apellidos está envuelto en un <code>&lt;div&gt;</code> con la clase <code>mb-3</code> para estilos y márgenes.</li>
                <li>Utiliza <code>&lt;label&gt;</code> para la descripción del campo y <code>&lt;input type="text"&gt;</code> para la entrada del usuario.</li>
                <li>El atributo <code>required</code> asegura que el campo debe ser completado. El atributo <code>pattern</code> proporciona una expresión regular que valida el formato del texto.</li>
                <li>Las <code>div.invalid-feedback</code> proporcionan mensajes de error si el usuario no cumple con las validaciones.</li>
            </ul>
        </li>
        <li>
            <strong>Campo de Teléfono:</strong>
            <p><code>&lt;input type="text" id="numero_tel" name="numero_tel" pattern="\d{10}" ...&gt;</code></p>
            <ul>
                <li>Se utiliza <code>type="text"</code> para ingresar el número de teléfono y se valida con el atributo <code>pattern</code> que permite solo 10 dígitos.</li>
                <li>Se especifica un mensaje de error en <code>invalid-feedback</code> si el número no cumple con el patrón.</li>
            </ul>
        </li>
        <li>
            <strong>Campo de Código Postal:</strong>
            <p><code>&lt;input type="number" id="codigo_postal" name="codigo_postal" min="0" ...&gt;</code></p>
            <ul>
                <li>Campo para ingresar el código postal, validado para ser un número entero no negativo con <code>min="0"</code>.</li>
                <li>El mensaje en <code>invalid-feedback</code> asegura que el número debe ser mayor o igual a 0.</li>
            </ul>
        </li>
        <li>
            <strong>Campo de Correo Electrónico:</strong>
            <p><code>&lt;input type="email" id="correo_electronico" name="correo_electronico" required&gt;</code></p>
            <ul>
                <li>Campo para ingresar una dirección de correo electrónico, validado automáticamente por el navegador para cumplir con el formato de correo.</li>
            </ul>
        </li>
        <li>
            <strong>Campo de Contraseña:</strong>
            <p><code>&lt;input type="password" id="contra" name="contra" pattern=".{8,}" ...&gt;</code></p>
            <ul>
                <li>Campo para la contraseña con validación que asegura que tenga al menos 8 caracteres usando <code>pattern</code>.</li>
                <li>Se proporciona un mensaje de error en <code>invalid-feedback</code> si la contraseña no cumple con la longitud mínima.</li>
            </ul>
        </li>
        <li>
            <strong>Campo de Selección para Ciudad:</strong>
            <p><code>&lt;select id="Id_ciudad" name="Id_ciudad" required&gt; ... &lt;/select&gt;</code></p>
            <ul>
                <li>Campo de selección para elegir una ciudad, con opciones cargadas dinámicamente desde el archivo PHP <code>selectciudad.php</code>.</li>
            </ul>
        </li>
        <li>
            <strong>Campo de Selección para Tipo de Usuario:</strong>
            <p><code>&lt;select id="Id_tipo_de_usuario" name="Id_tipo_de_usuario" required&gt; ... &lt;/select&gt;</code></p>
            <ul>
                <li>Campo de selección para elegir un tipo de usuario, con opciones cargadas desde el archivo PHP <code>selectipodeusuario.php</code>.</li>
            </ul>
        </li>
        <li>
            <strong>Cierre del Formulario:</strong>
            <p><code>&lt;/form&gt;</code></p>
            <ul>
                <li>El formulario se cierra con la etiqueta <code>&lt;/form&gt;</code>, indicando el final del bloque de formulario.</li>
            </ul>
        </li>
    </ol>
</body>
</html>
