var isLoading = false;
$(document).ready(function () {
    $(document).on('click', '#student_insert_btn', function (e) {
        e.preventDefault();
        if (!isLoading) {
            let student_first_name = $('#student_first_name').val();
            let student_last_name = $('#student_last_name').val();
            let student_email = $('#student_email').val();
            let student_password = $('#student_password').val();
            let student_confirmpassword = $('#student_confirmpassword').val();
            if (student_first_name == '') {
                $('#student_first_name').focus();
                return false;
            }
            if (student_last_name == '') {
                $('#student_last_name').focus();
                return false;
            }
            if (student_email == '') {
                $('#student_email').focus();
                return false;
            } else if (!validateEmail(student_email)) {
                $('#student_email').focus();
                $('#student_message').text('Emial is not valid').show();
                return false;
            } else {
                $('#student_message').hide();
            }
            if (student_password == '') {
                $('#student_password').focus();
                return false;
            }
            if (student_confirmpassword == '') {
                $('#student_confirmpassword').focus();
                return false;
            } else if (student_password != student_confirmpassword) {
                $('#student_confirmpassword').focus();
                $('#student_message').text('Password not matched').show();
                return false;
            } else {
                $('#student_message').hide();
            }
            isLoading = true;
            $.ajax({
                url: "../../app/add_new_student/add_new_student.php",
                type: 'POST',
                data: {
                    student_first_name: student_first_name,
                    student_last_name: student_last_name,
                    student_email: student_email,
                    student_password: student_password,
                    student_confirmpassword: student_confirmpassword
                },
                success: function (data) {
                    $('#student_message').html(data).show();
                    $('#student_insert_form')[0].reset();
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