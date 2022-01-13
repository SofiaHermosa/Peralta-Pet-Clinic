$("#formServices").validate({
    rules: {
        logo: "required",
        name: {
            required: true,
        },
        description: {
            required: true,
        },
        interval: {
            required: true,
        },
        price: {
            required: true,
            number:true
        },
    },
    messages: {
        logo: "Please enter your service logo as svg",
        name: "Please enter your service name",
        description: "Please enter service description",
        interval: "Please enter service time interval",
        price: {
            required: "Please enter service price",
            number: "Please enter valid amount for service price"
        },
    },
});

$('.updateService').on('click', function() {
    if ($("#formServices").valid()) {
        saveServices();
    }
});

$(document).on('click', '.editService', function() {
    var data = jQuery.parseJSON(atob($(this).data('service')));

    $('#editServicesModal').find('input[name="id"]').val(data['id']);
    $('#editServicesModal').find('#logo-prev').attr('src', `../../${data['logo']}`);
    $('#editServicesModal').find('input[name="name"]').val(data['name']);
    $('#editServicesModal').find('input[name="interval"]').val(data['time_interval']);
    $('#editServicesModal').find('input[name="price"]').val(data['price']);
    $('#editServicesModal').find('select[name="type"]').val(data['type']);
    $('#editServicesModal').find('textarea[name="description"]').val(atob(data['description']));

    $('#editServicesModal').fadeIn();
});

$(document).on('click', '.toggle-menu', function() {
    $('#editServicesModal').find('input[name="id"]').val('');
    $('#editServicesModal').find('#logo-prev').attr('src', `../../assets/images/default.jpg`);
    $('#editServicesModal').find('input[name="name"]').val('');
    $('#editServicesModal').find('input[name="interval"]').val('');
    $('#editServicesModal').find('input[name="price"]').val('');
    $('#editServicesModal').find('textarea[name="description"]').val('');
    $('#editServicesModal').find('select[name="type"]').val('');
});

function saveServices() {
    Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'to add or edit services',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        customClass: {
            confirmButton: 'bg-indigo-700',
            container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $("#formServices").submit();
        }
    });
}

$('.clockpicker').clockpicker({
    autoclose: true,
    donetext: 'Done'
});