
<?php require_once '../../app/database/config.php'; ?>
<?php require_once '../../app/database/database.php'; ?>
<?php $db =  new database(); ?>
<?php
try {
    $id = $_POST['id'];
    $sql = "DELETE FROM student WHERE id = " . $id;
    if ($db->link->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }
} catch (\Throwable $th) {
    echo 'Something went wrong' . $th->getMessage();
}
$db->link->close();
