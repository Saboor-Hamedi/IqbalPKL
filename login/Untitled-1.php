<?php
session_start();
require_once('../app/database/config.php');
require_once('../app/database/database.php');
require_once('../app/loginScript/loginScript.php');
$db = new database();
$login = new loginScript($db);
?>
<?php

$email = '';
$password = '';
$message = '';
$errors = array();
$errors1 = array();

?>
<?php
if (isset($_POST['loginBtn'])) {
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $password = mysqli_real_escape_string($db->link, $_POST['password']);
    if (empty($_POST['email'])) {
        array_push($errors,   'Email required');
    } else {
        $login->validate($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, 'Invalid email format');
        }
    }
    if (empty($_POST['password'])) {
        array_push($errors1, 'Password required');
    } else {
        $login->validate($_POST['password']);
    }
        $login->logged_in($email, $password);
        array_push($errors1, $login->error);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row">
                            <img src="https://i.imgur.com/CXQmsmF.png" class="logo">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="https://i.imgur.com/uNGdWHi.png" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Login</h6>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div> <small class="or text-center">Or</small>
                            <div class="line"></div>
                        </div>

                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input class="mb-1" type="text" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES) ?>" placeholder="Enter a valid email address">
                                <span class="error ">*
                                    <?php if (count($errors) > 0) : ?>
                                        <?php foreach ($errors as $error) : ?>
                                            <?php echo $error; ?>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </span>
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input class="mb-1" type="password" name="password" id="password"  placeholder="Enter password">
                                <span class="error ">*
                                    <?php if (count($errors1) > 0) : ?>
                                        <?php foreach ($errors1 as $error) : ?>
                                            <?php echo $error; ?>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </span>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                                    <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                                </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" name="loginBtn" class="btn btn-blue text-white">Login</button>
                            </div>
                        </form>
                        <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">
                        <!-- copyright goes here -->
                    </small>
                    <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>