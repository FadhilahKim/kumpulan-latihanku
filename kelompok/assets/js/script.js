$(function () {

    $('.newRole').on('click', function () {
        $('#exampleRoleModalLabel').html('Add New Role');
        $('.modal-footer button[type=submit]').html('Add');
        $('.modal-body form').attr('action', 'http://localhost/ci-login/admin/editrole');
    });

    $('.roleModalEdit').on('click', function () {
        $('#exampleRoleModalLabel').html('Edit Role');
        $('.modal-footer button[type=submit]').html('Edit');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/ci-login/admin/geteditrole/',
            data: { id: id },
            method: 'post',
            dataTyoe: 'json',
            success: function (data) {
                $('#role').val(data.role);
            }
        });
    });
});