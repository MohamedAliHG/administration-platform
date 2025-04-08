$(document).ready(function () {
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copy',
                text: 'Copy'
            },
            {
                extend: 'csv',
                text: 'CSV'
            },
            {
                extend: 'excel',
                text: 'Excel'
            },
            {
                extend: 'pdf',
                text: 'PDF'
            }
        ]
    });
});