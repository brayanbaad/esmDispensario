
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
            { 'data': 'acciones' },
            { 'data': 'apellidos' },
            { 'data': 'nombres' },
            { 'data': 'clasificacionRiesgo' },
            { 'data': 'fechaNacimiento' },
            { 'data': 'edad' },
            { 'data': 'telefono' },
            { 'data': 'id' },
            { 'data': 'estado' },
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
        },
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [
            {
                extend: "pdfHtml5",
                download: "open",
                footer: true,
                title: "Reporte Pdf",
                filename: "Reporte",
                text: '<span class="badge  badge-danger"><i class="material-icons">save</i>pdf</span>',
                exportOptions: {
                    columns: [0, ":visible"],
                },
            },
            {
                //Botón para Excel
                extend: "excelHtml5",
                footer: true,
                title: "Reporte Excel",
                filename: "Reporte",
                //Aquí es donde generas el botón personalizado
                text: '<span class="badge badge-success"><i class="material-icons">save</i>Cvs</span>',
            },
            //Botón para PDF
            
        ],
        responsive: true,
        order: [[0, 'desc']]

    });
})







