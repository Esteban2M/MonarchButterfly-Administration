eventListeners();

function eventListeners() {
    document.querySelector('#seleccionar').addEventListener('click', abrirEditor);
}

function abrirEditor(e) {
    e.preventDefault();
    var santuarioSeleccionado = document.querySelector('#santuario').value;
    window.location.href = 'EditarSantuario.php?id=' + santuarioSeleccionado;
}