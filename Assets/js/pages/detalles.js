
let tdlDetalles;
document.addEventListener('DOMContentLoaded', function () {
    //CARGAR DATOS CON DATATABLE
    tdlDetalles = $('#tdlDetalles').DataTable({
        ajax: {
            url: BASE_URL + 'Detalles/listar',
            dataSrc: ''
        },
        columns: [
            { 'data': 'identificacion' },
            { 'data': 'apellidos' },
            { 'data': 'nombres' },
            { 'data': 'clasificacionRiesgo' },
            { 'data': 'fechaNacimiento' },
            { 'data': 'edad' },
            { 'data': 'telefono' },
            { 'data': 'id' },
            { 'data': 'estado' },
            { 'data': 'acciones' },
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
        },
        responsive: true,
        order: [[0, 'desc']]
    });
})






