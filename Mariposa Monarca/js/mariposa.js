eventListeners();

function eventListeners() {

    document.querySelector('#actualizarRecorrido').addEventListener('click', actualizarRecorrido);
}

function actualizarRecorrido(e) {
    e.preventDefault();

    var nombre_mariposa = document.querySelector('#nombre').value,
        mes_recorrido = document.querySelector('#mes').value,
        pos_recorrido = document.querySelector('#posicion').value,
        est_mariposa = document.querySelector('#estado').value,
        idSantuario = document.querySelector('#santuario').value;

    if (nombre_mariposa === "" || mes_recorrido === "" || pos_recorrido === "") {
        swal({
            type: 'error',
            title: 'Error',
            text: 'Llena todos los campos'
        });
    } else {
        // Ambos datos son correctos ,mandar a ejecutar AJAX

        // Datos que se envian al servidor
        var datosFormulario = new FormData();
        datosFormulario.append('nombre_mariposa', nombre_mariposa);
        datosFormulario.append('mes_recorrido', mes_recorrido);
        datosFormulario.append('pos_recorrido', pos_recorrido);
        datosFormulario.append('est_mariposa', est_mariposa);
        datosFormulario.append('idSantuario', idSantuario);

        //Crear el llamado a AJAX
        var xhr = new XMLHttpRequest();
        //Abrir la conexión
        xhr.open('POST', 'inc/modelos/modelo-admin-mariposa.php', true);


        //retorno de datos

        xhr.onload = function() {
                if (this.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);

                    if (respuesta.respuesta === 'correcto') {
                        Swal.fire('Valor actualizado correctamente', '', 'success')
                            .then(resultado => {
                                if (resultado.value) {
                                    window.location.href = 'admin-mariposas.php'
                                }
                            })

                    }
                }
            }
            //Enviar la petición
        xhr.send(datosFormulario);
    }
}