$("#formTeams").validate({
    rules: {
        name: {
            required: true,
        },
        description: {
            required: true,
        },
    },
    messages: {
        name: "Please enter your team member name",
        description: "Please enter team member description"
    },
});

$('.updateTeam').on('click', function() {
    if ($("#formTeams").valid()) {
        saveTeams();
    }
});

$(document).on('click', '.editTeam', function() {
    var data = jQuery.parseJSON(atob($(this).data('team')));

    $('#editTeamsModal').find('input[name="id"]').val(data['id']);
    $('#editTeamsModal').find('#logo-prev').attr('src', `../../${data['profile']}`);
    $('#editTeamsModal').find('input[name="name"]').val(data['name']);
    $('#editTeamsModal').find('textarea[name="description"]').val(atob(data['description']));

    $('#editTeamsModal').fadeIn();
});

function saveTeams() {
    Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'to add or edit team member',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        customClass: {
            confirmButton: 'bg-indigo-700',
            container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $("#formTeams").submit();
        }
    })
}