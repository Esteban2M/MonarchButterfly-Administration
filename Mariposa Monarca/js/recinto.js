eventListeners();

function eventListeners() {
    document.querySelector('#seleccionar').addEventListener('click', abrirEditor);
}

function abrirEditor(e) {
    e.preventDefault();
    var santuarioSeleccionado = document.querySelector('#recinto').value;
    window.location.href = 'EditarRecinto.php?id=' + santuarioSeleccionado;
}