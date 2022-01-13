$(document).ready(function() {
    window.tableOrder = typeof window.tableOrder == 'undefined' ? [0, 'asc'] : window.tableOrder;
    $('#datatable').DataTable({
        "ajax": window.url,
        "order": [window.tableOrder]
    });
});