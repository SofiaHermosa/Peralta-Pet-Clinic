window.reportAptTable;
window.reportPntTable;
var url = '/res/reports/data?from=appointment';
var urlPnt = '/res/reports/data?from=patient';

$(document).on('change', '.filterApt', filterAptTable);

$(document).on('change', '.filterPnt', filterPntTable);

$(document).on('click', '.clearAptFilter', clearAptFilter);

$(document).on('click', '.clearPntFilter', clearPntFilter);


function clearAptFilter(){
    url = '/res/reports/data?from=appointment';

    window.reportAptTable.ajax.url(url).load();

    $(document).find('.filterApt').val('');
}

function clearPntFilter(){
    url = '/res/reports/data?from=patient';

    window.reportPntTable.ajax.url(url).load();

    $(document).find('.filterPnt').val('');
}

function filterAptTable(){
    var column = {
        'from'       : 'appointment',
        'start_date' : $('input[name="start_date"]').val(),
        'end_date'   : $('input[name="end_date"]').val(),
        'patient'    : $('select[name="patient"]').val(),
        'service'    : $('select[name="services"]').val(),
        'status'     : $('select[name="status"]').val(),
    };

    var toURL = new URLSearchParams(column).toString();

    var aptURL = `/res/reports/data?${toURL}`;

    window.reportAptTable.ajax.url(aptURL).load();
}

function filterPntTable(){
    var column = {
        'from'       : 'patient',
        'user_start_date' : $('input[name="user_start_date"]').val(),
        'user_end_date'   : $('input[name="user_end_date"]').val(),
        'gender'   : $('select[name="gender"]').val(),
    };

    var toURL = new URLSearchParams(column).toString();

    var aptURL = `/res/reports/data?${toURL}`;

    window.reportPntTable.ajax.url(aptURL).load();
}

function updateAptTable(url){
    window.reportAptTable = $('#reportAptTable').DataTable({
        "ajax": url,
        "bLengthChange": false,
        "bFilter": false,
        "dom" : 'Bfrtip',
        "buttons" : [
            // 'excel', 'copy', 'print'
            {
                extend: 'excel',
                title: 'Peralta Dog and Cat Clinic - Appointment Reports'
            },
            // {
            //     extend: 'copy',
            //     title: 'Peralta Dog and Cat Clinic - Appointment Reports'
            // },
            {
                extend: 'pdf',
                title: 'Peralta Dog and Cat Clinic - Appointment Reports'
            },
            {
                extend: 'print',
                title: 'Peralta Dog and Cat Clinic - Appointment Reports'
            },
        ],
        "columns": [
            { "data": "" },
            { "data": "apt_contactno" },
            { "data": "apt_visit_reason" },
            { "data": "formatted_date" },
            { "data": "formatted_time" },
            { "data": "" },
        ], 
        'columnDefs' : [
            {
                'targets' : 0,
                'render' : function ( url, type, full) {
                    return full['apt_fname']+ ' ' +full['apt_lname'];
                }
            },
            {
                'targets' : 5,
                'render' : function ( url, type, full) {
                    return `<center>${full['status_badge']}</center>`;
                }
            },
        ],
        "order": [[3, 'desc']]  
    });
}

function updatePntTable(url){
    window.reportPntTable = $('#reportPntTable').DataTable({
        "ajax": url,
        "bLengthChange": false,
        "bFilter": false,
        "dom" : 'Bfrtip',
        "buttons" : [
           
            {
                extend: 'excel',
                title: 'Peralta Dog and Cat Clinic - Patient List'
            },
            {
                extend: 'pdf',
                title: 'Peralta Dog and Cat Clinic - Patient List'
            },
            {
                extend: 'print',
                title: 'Peralta Dog and Cat Clinic - Patient List'
            },
        ],
        "columns": [
            { "data": "" },
            { "data": "contact_no" },
            { "data": "email" },
            { "data": "uname" },
            { "data": "gender" },
        ], 
        'columnDefs' : [
            {
                'targets' : 0,
                'render' : function ( url, type, full) {
                    return `${full['first_name']} ${full['last_name']}`;
                }
            }
        ],
        "order": [[0, 'desc']]  
    });
}

$(document).ready(function() {
    updateAptTable(url);
    updatePntTable(urlPnt);
});