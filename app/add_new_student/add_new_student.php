<?php require_once __DIR__ . '/../database/config.php'; ?>
<?php require_once __DIR__ . '/../database/database.php'; ?>
<?php $db = new database(); ?>

<?php
$student_first_name = '';
$student_last_name = '';
$student_email = '';
$student_password = '';
$student_confirmpassword = '';

if (!empty($_POST)) {
    $student_first_name = mysqli_real_escape_string($db->link, $_POST['student_first_name']);
    $student_last_name = mysqli_real_escape_string($db->link, $_POST['student_last_name']);
    $student_email = mysqli_real_escape_string($db->link, $_POST['student_email']);
    $student_password = mysqli_real_escape_string($db->link, $_POST['student_password']);
    $student_confirmpassword = mysqli_real_escape_string($db->link, $_POST['student_confirmpassword']);
    $sql_check = "SELECT email FROM student WHERE email = '$student_email'";
    $result_check = mysqli_query($db->link, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        echo 'Email is already taken';
        die();
    } else {
   $sql = "INSERT INTO student (name, lastname, email, password, cpassword)
        VALUES('$student_first_name', '$student_last_name', '$student_email', '$student_password', '$student_confirmpassword')";
    if ($db->insert($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo 'Something went wrong';
    }
    }
}
