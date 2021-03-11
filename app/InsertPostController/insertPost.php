
<?php require_once '../../app/database/config.php'; ?>
<?php require_once '../../app/database/database.php'; ?>
<?php require_once '../../app/InsertPostController/insert.php'; ?>
<?php $db =  new database(); ?>
<?php $insert = new insert($db);?>
<?php
$posttitle = '';
$mainTextArea = '';

if (!empty($_POST)) {
    $posttitle = $_POST['posttitle'];
    $mainTextArea = $_POST['mainTextArea'];
    $insert->Insert($posttitle, $mainTextArea);
    $stmt->close();

}
