$("#formServices").validate({
    rules: {
        logo: "required",
        name: {
            required: true,
        },
        description: {
            required: true,
        },
    },
    messages: {
        logo: "Please enter your service logo as svg",
        name: "Please enter your service name",
        description: "Please enter service description"
    },
});

$('.updateService').on('click', function() {
    if ($("#formServices").valid()) {
        saveServices();
    }
});

$(document).on('click', '.editService', function() {
    var data = jQuery.parseJSON(atob($(this).data('service')));

    $('#editServicesModal').find('textarea[name="id"]').val(data['id']);
    $('#editServicesModal').find('textarea[name="logo"]').val(data['logo']);
    $('#editServicesModal').find('input[name="name"]').val(data['name']);
    $('#editServicesModal').find('textarea[name="description"]').val(atob(data['description']));

    $('#editServicesModal').fadeIn();
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
    })
}