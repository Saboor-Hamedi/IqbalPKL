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
// ------------------------------------ fetch-----------------------------------
$(document).ready(function () {
    $(document).on("click", ".fetchStudentData", function (e) {
        e.preventDefault();
        let id = $(this).attr("id");
        $.ajax({
            url: "../../app/add_new_student/fetchStudent.php",
            method: "POST",
            data: { id: id },
            dataType: 'json',
            success: function (data) {
                $('input#update_student_id').val(data[0]);
                $('input#update_student_name').val(data[1]);
                $('input#update_student_lastname').val(data[2]);
                $('input#update_student_email').val(data[3]);
                $('.update_student_email').html(data);
            }
        });
    });

});
//----------------------------------- update-------------------------------------
document.addEventListener('click', function () {
    $(document).ready(function () {
        $(document).on('click', '#updateStudentBtn', function (e) {
            e.preventDefault();
            if (!isLoading) {
                let update_student_id = $('input#update_student_id').val();
                let update_student_name = $('input#update_student_name').val();
                let update_student_lastname = $('input#update_student_lastname').val();
                let update_student_email = $('input#update_student_email').val();
                if (update_student_id.length == '') {
                    $('input#update_student_id').focus();
                    return false;
                }
                if (update_student_name.length == '') {
                    $('input#update_student_name').focus();
                    return false;
                }

                if (update_student_lastname.length == '') {
                    $('input#update_student_lastname').focus();
                    return false;
                }
                if (update_student_email.length == '') {
                    $('input#update_student_email').focus();
                    return false;
                }
                isLoading = true;
                $.ajax({
                    url: "../../app/add_new_student/updateStudent.php",
                    method: 'POST',
                    data: {
                        update_student_id: update_student_id,
                        update_student_name: update_student_name,
                        update_student_lastname: update_student_lastname,
                        update_student_email: update_student_email,
                    },
                    success: function (data) {
                        $('.update_student_email').html(data);
                            setInterval(function () {
                                location.reload();
                            }, 5000);
                        $('#update_student_form')[0].rese();
                        isLoading = false;
                    }
                });
            }
        });
    });
});

   $('.deleteStudentBtn').on('click', function () {
    var id = $(this).attr('id');
    var el = this;
    var confirmalert = confirm("Are you sure?");
    if (confirmalert == true) {
        $.ajax({
            url: "../../app/add_new_student/deleteStudent.php",
            type: 'POST',
            data: { id: id },
            success: function (data) {
                // Remove row from HTML Table
                $(el).closest('tr').css('background', 'tomato');
                $(el).closest('tr').fadeOut(800, function () {
                    $(this).remove();
                });
            }
        });
    }
});
// validate email
function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
}