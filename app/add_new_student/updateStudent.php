
<?php require_once '../../app/database/config.php'; ?>
<?php require_once '../../app/database/database.php'; ?>
<?php $db =  new database(); ?>
<?php
$update_student_id = "";
$update_student_name = "";
$update_student_lastname = "";
$update_student_email = "";
if (!empty($_POST)) {
    try {
        $update_student_id = mysqli_real_escape_string($db->link, $_POST['update_student_id']);
        $update_student_name = mysqli_real_escape_string($db->link, $_POST['update_student_name']);
        $update_student_lastname =  mysqli_real_escape_string($db->link, $_POST['update_student_lastname']);
        $update_student_email = mysqli_real_escape_string($db->link, $_POST['update_student_email']);
        $update = "UPDATE student SET name =  '$update_student_name',
                            lastname = '$update_student_lastname', 
                            email = '$update_student_email'
                             WHERE id = '$update_student_id '  ";
        // $update->bind_param('ssss', $update_student_id, $update_student_name, $update_student_lastname, $update_student_email);
        if ($db->link->query($update)) {
            echo 'Please Data is updating...';
        } else {
            echo 'Somethin went wrong';
        }
    } catch (\Throwable $th) {
        echo 'Something went wrong ' . $th->getMessage();
    }
    $db->link->close();
}
