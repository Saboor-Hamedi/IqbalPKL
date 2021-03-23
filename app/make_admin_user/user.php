<?php require_once __DIR__ . '/../database/config.php'; ?>
<?php require_once __DIR__ . '/../database/database.php'; ?>
<?php $db = new database(); ?>

<?php
$admin_name = '';
$admin_last_name = '';
$admin_email = '';
$admin_password = '';
$admin_confirmpassword = '';

if (!empty($_POST)) {
    $admin_name = mysqli_real_escape_string($db->link, $_POST['admin_name']);
    $admin_last_name = mysqli_real_escape_string($db->link, $_POST['admin_last_name']);
    $admin_email = mysqli_real_escape_string($db->link, $_POST['admin_email']);
    $admin_password = mysqli_real_escape_string($db->link, $_POST['admin_password']);
    $admin_confirmpassword = mysqli_real_escape_string($db->link, $_POST['admin_confirmpassword']);
    $sql_check = "SELECT email FROM admin WHERE email = '$admin_email'";
    $result_check = mysqli_query($db->link, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        echo 'Email is already taken';
        die();
    } else {
        $sql = "INSERT INTO admin (name, lastname, email, password, cpassword)
        VALUES('$admin_name', '$admin_last_name', '$admin_email', '$admin_password', '$admin_confirmpassword')";
        if ($db->insert($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo 'Something went wrong';
        }
    }
}
