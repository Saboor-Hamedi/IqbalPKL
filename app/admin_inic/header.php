<?php session_start(); ?>
    <?php require_once realpath('app/posts/SelectPostrController.php'); ?>
    <?php require_once realpath('app/database/config.php'); ?>
    <?php require_once realpath('app/database/database.php'); ?>
    <?php require_once realpath('app/helper/helper.php'); ?>
    <?php require_once realpath('app/InsertPostController/select.php'); ?>
    <?php $db =  new database(); ?>
    <?php $select = new Select($db); ?>
    <?php $helper = new helper(); ?>
    <?php $post = new SelectPostController($db); ?>

    <?php  $user_id  =$_SESSION['user_id']; ?>
    <?php
    $selectID = $post->fetch('admin', $user_id);
    foreach ($selectID as $idSelected) {
        $user_id =  $idSelected['id'];
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>EEducation Master Template</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
        <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
        <!-- FAV ICON(BROWSER TAB ICON) -->
        <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
        <!-- FONTAWESOME ICONS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="public/font/css/all.min.css">
        <!-- ALL CSS FILES -->

        <link href="css/materialize.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/style-mob.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../public/css/style.css">

    </head>

    <script>
        // stop resubmission
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>