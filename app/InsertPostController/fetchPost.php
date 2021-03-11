
<?php require_once '../../app/database/config.php'; ?>
<?php require_once '../../app/database/database.php'; ?>
<?php $db =  new database(); ?>
<?php
if (isset($_POST["id"])) {
    $query = "SELECT * FROM posts WHERE id = '".$_POST["id"]."'";
    $result = $db->select($query);
    $row = $result->fetch_array();
     echo json_encode($row);
}

