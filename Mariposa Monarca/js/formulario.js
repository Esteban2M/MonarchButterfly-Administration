eventListeners();

function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarSesion);

}

function validarSesion(e) {
    e.preventDefault();
    console.log('hola!!');

    var usuario = document.querySelector('#usuario').value,
        password = document.querySelector('#password').value;

    if (usuario === '' || password === '') {
        swal({
            type: 'error',
            title: 'Error',
            text: 'Llena todos los campos'
        });
    } else {
        // Ambos datos son correctos ,mandar a ejecutar AJAX

        // Datos que se envian al servidor
        var datosFormulario = new FormData();
        datosFormulario.append('usuario', usuario);
        datosFormulario.append('password', password);
        console.log(datosFormulario.get('usuario'));

        //Crear el llamado a AJAX
        var xhr = new XMLHttpRequest();
        //Abrir la conexión
        xhr.open('POST', 'inc/modelos/modelo-admin.php', true);


        //retorno de datos

        xhr.onload = function() {
            if (this.status === 200) {

                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);

                if (respuesta.respuesta === 'correcto') {
                    if (respuesta.rol === 1) {
                        Swal.fire(
                                'Login correcto',
                                '',
                                'success'
                            )
                            .then(resultado => {
                                if (resultado.value) {
                                    window.location.href = 'admin.php'
                                }
                            })
                    } else {
                        Swal.fire(
                                'Login correcto',
                                '',
                                'success'
                            )
                            .then(resultado => {
                                if (resultado.value) {
                                    window.location.href = 'ventas.php'
                                }
                            })
                    }

                } else if (respuesta.respuesta === 'Password incorrecta' || respuesta.respuesta === 'Usuario no existe') {
                    swal({
                        type: 'error',
                        title: 'Error',
                        text: 'Usuario y/o password incorrecto'
                    });
                } else {
                    swal({
                        type: 'error',
                        title: 'Error',
                        text: 'Llena todos los campos'
                    });
                }
            }
        }

        //Enviar la petición
        xhr.send(datosFormulario);
    }
}