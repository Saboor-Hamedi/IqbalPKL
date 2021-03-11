
<?php require_once '../../app/database/config.php'; ?>
<?php require_once '../../app/database/database.php'; ?>
<?php $db =  new database(); ?>
<?php 

$updatePostid = "";
$updatePostTtitle = "";
$updatePostTextArea = "";
if (!empty($_POST)) {
    $updatePostid =  $_POST['updatePostid'];
    $updatePostTtitle =  $_POST['updatePostTtitle'];
    $updatePostTextArea = $_POST['updatePostTextArea'];
    $update = $db->link->prepare("UPDATE posts SET title = ?, body = ? WHERE id = ? ");
    $update->bind_param('sss', $updatePostTtitle, $updatePostTextArea, $updatePostid);
    if ($update->execute()) {
        echo 'Data is updating...';
    } else {
        echo 'Data not updated';
    }
   $update->close();
}