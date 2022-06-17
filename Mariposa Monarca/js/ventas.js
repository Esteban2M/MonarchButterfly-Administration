eventListeners();

function eventListeners() {
    document.querySelector('#submit').addEventListener('click', registrarVenta);

}

function registrarVenta(e) {
    e.preventDefault();
    var boletos = document.querySelector('#boletos').value,
        descuento = document.querySelector('#descuento').value,
        id_usuario = document.querySelector('#id_usuario').value,
        precio = 50,
        monto = 0;

    if (boletos == "") {
        swal({
            type: 'error',
            title: 'Error',
            text: 'Llena todos los campos'
        });
    } else {

        if (descuento == "Ninguno") {
            monto = boletos * precio;
        } else if (descuento == "Estudiante") {
            monto = boletos * precio * 0.50;
        } else {
            monto = boletos * precio * 0.60;
        }

        var descripcion = "Los boletos adquiridos fuerón " + boletos + " , con un descuento de tipo " + descuento + " del precio original: $" + precio + ".00";

        Swal.fire({
            title: '¿Estas seguro que quieres registrar la venta?',
            showCancelButton: true,
            confirmButtonText: `Aceptar`
        }).then((result) => {
            if (result.value) {
                var datosFormulario = new FormData();
                datosFormulario.append('monto', monto);
                datosFormulario.append('descripcion', descripcion);
                datosFormulario.append('id_usuario', id_usuario);

                //Crear el llamado a AJAX
                var xhr = new XMLHttpRequest();
                //Abrir la conexión
                xhr.open('POST', 'inc/modelos/modelo-ventas.php', true);


                //retorno de datos

                xhr.onload = function() {
                        if (this.status === 200) {

                            var respuesta = JSON.parse(xhr.responseText);


                            if (respuesta.respuesta === 'correcto') {
                                Swal.fire('Venta registrada exitosamente', '', 'success')
                            } else {
                                swal({
                                    type: 'error',
                                    title: 'Error',
                                    text: 'Ocurrio un error al registrar la venta'
                                });
                            }
                        }
                    }
                    //Enviar la petición
                xhr.send(datosFormulario);

                /* Read more about isConfirmed, isDenied below */
            }


        })
    }

}