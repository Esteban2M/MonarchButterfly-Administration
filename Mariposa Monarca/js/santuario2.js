eventListeners();

function eventListeners() {

    document.querySelector('#actualizarInfo').addEventListener('click', actualizarInfo);
}

function actualizarInfo(e) {
    e.preventDefault();

    var nombre = document.querySelector('#nombre').value,
        fechInicio = document.querySelector('#fechInicio').value,
        idSantuario = document.querySelector('#idSantuario').value,
        fechfin = document.querySelector('#fechfin').value;
    console.log(fechInicio);
    if (nombre === "" || fechInicio === "" || fechfin === "") {
        swal({
            type: 'error',
            title: 'Error',
            text: 'Llena todos los campos'
        });
    } else {
        // Ambos datos son correctos ,mandar a ejecutar AJAX

        // Datos que se envian al servidor
        var datosFormulario = new FormData();
        datosFormulario.append('nombre', nombre);
        datosFormulario.append('fechInicio', fechInicio);
        datosFormulario.append('fechfin', fechfin);
        datosFormulario.append('idSantuario', idSantuario);

        //Crear el llamado a AJAX
        var xhr = new XMLHttpRequest();
        //Abrir la conexión
        xhr.open('POST', 'inc/modelos/modelo-admin-santuarios2.php', true);


        //retorno de datos

        xhr.onload = function() {
                if (this.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    if (respuesta.respuesta === 'correcto') {
                        Swal.fire('Valor actualizado correctamente', '', 'success')
                            .then(resultado => {
                                if (resultado.value) {
                                    window.location.href = 'admin-santuarios.php'
                                }
                            })

                    }
                }
            }
            //Enviar la petición
        xhr.send(datosFormulario);
    }
}