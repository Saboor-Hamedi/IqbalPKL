var isLoading = false;
$(document).ready(function () {
    $(document).on('click', '#make_admin_btn', function (e) {
        e.preventDefault();
        if (!isLoading) {
            let admin_name = $('#admin_name').val();
            let admin_last_name = $('#admin_last_name').val();
            let admin_email = $('#admin_email').val();
            let admin_password = $('#admin_password').val();
            let admin_confirmpassword = $('#admin_confirmpassword').val();
            if (admin_name == '') {
                $('#admin_name').focus();
                return false;
            }
            if (admin_last_name == '') {
                $('#admin_last_name').focus();
                return false;
            }
            if (admin_email == '') {
                $('#admin_email').focus();
                return false;
            } else if (!validateEmail(admin_email)) {
                $('#admin_email').focus();
                $('#admin_notification').text('Emial is not valid').show();
                return false;
            } else {
                $('#admin_notification').hide();
            }
            if (admin_password == '') {
                $('#admin_password').focus();
                return false;
            }
            if (admin_confirmpassword == '') {
                $('#admin_confirmpassword').focus();
                return false;
            } else if (admin_password != admin_confirmpassword) {
                $('#admin_confirmpassword').focus();
                $('#admin_notification').text('Password not matched').show();
                return false;
            } else {
                $('#admin_notification').hide();
            }
            isLoading = true;
            $.ajax({
                url: "../../app/make_admin_user/user.php",
                type: 'post',
                data: {
                    admin_name: admin_name,
                    admin_last_name: admin_last_name,
                    admin_email: admin_email,
                    admin_password: admin_password,
                    admin_confirmpassword: admin_confirmpassword
                },
                success: function (data) {
                    $('#admin_notification').html(data).show();
                    $('#new_admin_form')[0].reset();
                    setTimeout(function () {
                        window.location.reload(0);
                    }, 5000);
                }
            });
            isLoading = false;
        }
    });
});
// hide email after 5 second;

// validate email
function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
}