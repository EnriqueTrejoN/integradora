function isFormValid(formName) {
    $(`#${formName}`).addClass("was-validated");
    if (!$(`#${formName}`)[0].checkValidity()) {
        $(`#${formName} .invalid-feedback`).each(function () {
            if ($(this)[0].offsetParent) {
                return false;
            }
        });
        return false;
    }
    return true;
}

function isFormValid(formId) {
    const form = document.getElementById(formId);
    return form.checkValidity();
}

function fnGuardar() {
    var form = document.getElementById('myForm');
    if (!form) {
        console.error('Formulario no encontrado.');
        return;
    }
    // Recoger datos del formulario
    var formData = new FormData(document.getElementById('myForm'));

    // Enviar datos al servidor
    $.ajax({
        url: 'paquetesguardar.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            try {
                var jsonResponse = JSON.parse(response);
                if (jsonResponse.success) {
                    Swal.fire({
                        title: "¡Éxito!",
                        text: jsonResponse.success,
                        icon: "success"
                    }).then(() => {
                        location.reload(); // Recargar la página para reflejar los cambios
                    });
                } else if (jsonResponse.error) {
                    Swal.fire({
                        title: "Error",
                        text: jsonResponse.error,
                        icon: "error"
                    });
                }
            } catch (e) {
                console.error('No se pudo analizar JSON:', e);
                console.log('Respuesta:', response);
            }
        },
        error: function (xhr) {
            Swal.fire({
                title: "Error",
                text: "Ocurrió un error: " + xhr.status + " " + xhr.statusText,
                icon: "error"
            });
        }
    });
}

// Función para cargar los datos en el formulario
function fnEditar(id) {
    $.ajax({
        url: "paquetesobtener.php",
        type: 'post',
        data: {
            id: id
        },
        success: function (result) {
            try {
                var jsonResponse = JSON.parse(result);
                if (jsonResponse.data && jsonResponse.data.length > 0) {
                    var registro = jsonResponse.data[0];
                    // console.log(registro.Id_paquete)
                    // console.log(registro.Id_tipo_de_paquetes)
                    // console.log(registro.Id_eventos)
                    $('#myeditForm #id').val(registro.Id_paquete);
                    $('#myeditForm #paquete').val(registro.Id_tipo_de_paquetes);
                    $('#myeditForm #evento').val(registro.Id_eventos);
                } else if (jsonResponse.error) {
                    Swal.fire({
                        title: 'Error',
                        text: jsonResponse.error,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            } catch (e) {
                console.error('Could not parse JSON:', e);
                Swal.fire({
                    title: 'Error',
                    text: 'Error al procesar la respuesta del servidor.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        },
        error: function (xhr) {
            alert("An error occurred: " + xhr.status + " " + xhr.statusText);
        }
    });
}

function fnGuardarCambios() {
    var formData = new FormData(document.getElementById('myeditForm'));
    if (!isFormValid('myeditForm')) {
        return;
    }
    $.ajax({
        url: 'paquetesactualizar.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
            try {
                var jsonResponse = JSON.parse(result);
                if (jsonResponse.success) {
                    Swal.fire({
                        title: '¡Éxito!',
                        text: 'El registro se ACTUALIZO correctamente!!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
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



function isFormValid(formId) {
    var form = document.getElementById(formId);
    return form.checkValidity();
}

function fnBorrar(id) {
    // Muestra una alerta de confirmación antes de proceder con la eliminación
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás recuperar este registro después de eliminarlo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Realiza la solicitud de eliminación si el usuario confirma
            $.ajax({
                url: "paquetesdelete.php",
                type: 'GET',
                data: {
                    id: id
                },
                success: function (result) {
                    try {
                        var jsonResponse = JSON.parse(result);
                        if (jsonResponse.Success) {
                            Swal.fire({
                                title: '¡Éxito!',
                                text: 'El registro con id ' + id + ' se ha eliminado exitosamente.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                location
                                    .reload(); // Recarga la página para reflejar los cambios
                            });
                        } else if (jsonResponse.error) {
                            Swal.fire({
                                title: 'Error',
                                text: jsonResponse.error,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    } catch (e) {
                        console.error('No se pudo analizar JSON:', e);
                        console.log('Respuesta:', result);
                        Swal.fire({
                            title: 'Error',
                            text: 'Error al procesar la respuesta del servidor.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function (xhr) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Ocurrió un error: ' + xhr.status + ' ' + xhr.statusText,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }
    });
}