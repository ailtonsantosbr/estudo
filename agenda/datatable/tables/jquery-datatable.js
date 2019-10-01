$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        paging: true,
        "iDisplayLength": 7,
        buttons: [
           /* 'copy', 'csv', 'excel', 'pdf', 'print'*/
        ]
    });
});