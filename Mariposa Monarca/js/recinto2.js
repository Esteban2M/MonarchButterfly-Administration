eventListeners();

function eventListeners() {

    document.querySelector('#actualizarInfo').addEventListener('click', actualizarInfo);
}

function actualizarInfo(e) {
    e.preventDefault();

    var nombre_recinto = document.querySelector('#nombre').value,
        status_recinto = document.querySelector('#seleccionRecinto').value,
        horario_recinto = document.querySelector('#horario_recinto').value,
        id_recinto = document.querySelector('#id_recinto').value,
        descripcion = document.querySelector('#descripcion').value;
    console.log(status_recinto);
    if (nombre === "" || horario_recinto === "" || descripcion === "") {
        swal({
            type: 'error',
            title: 'Error',
            text: 'Llena todos los campos'
        });
    } else {
        // Ambos datos son correctos ,mandar a ejecutar AJAX

        // Datos que se envian al servidor
        var datosFormulario = new FormData();
        datosFormulario.append('nombre_recinto', nombre_recinto);
        datosFormulario.append('horario_recinto', horario_recinto);
        datosFormulario.append('id_recinto', id_recinto);
        datosFormulario.append('status_recinto', status_recinto);
        datosFormulario.append('descripcion', descripcion);
        console.log(status_recinto);
        //Crear el llamado a AJAX
        var xhr = new XMLHttpRequest();
        //Abrir la conexión
        xhr.open('POST', 'inc/modelos/modelo-admin-recintos2.php', true);


        //retorno de datos

        xhr.onload = function() {
                if (this.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    if (respuesta.respuesta === 'correcto') {
                        Swal.fire('Valor actualizado correctamente', '', 'success')
                            .then(resultado => {
                                if (resultado.value) {
                                    window.location.href = 'admin-recintos.php'
                                }
                            })

                    }
                }
            }
            //Enviar la petición
        xhr.send(datosFormulario);
    }
}