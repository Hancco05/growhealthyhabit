// script.js

function filtrarTareas() {
    var mesSeleccionado = document.getElementById("mes").value;
    // Lógica para filtrar las tareas según el mes seleccionado
    // ...

    // Ejemplo de tareas
    var tareas = [
        { tipo: "baja", dia: 5, urgencia: "baja" },
        { tipo: "media", dia: 15, urgencia: "media" },
        { tipo: "alta", dia: 25, urgencia: "alta" }
    ];

    mostrarTareas(tareas);
}

function mostrarTareas(tareas) {
    var tareasDiv = document.querySelector('.tareas');
    tareasDiv.innerHTML = '';

    tareas.forEach(function(tarea) {
        var tareaDiv = document.createElement('div');
        tareaDiv.classList.add('tarea', tarea.tipo);
        tareaDiv.textContent = 'Día ' + tarea.dia;
        tareasDiv.appendChild(tareaDiv);
    });
}
