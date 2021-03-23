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
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="/images/3.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input class="form-control" type="text" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES) ?>" placeholder="Enter a valid email address">
									<span class="error ">*
										<?php if (count($errors) > 0) : ?>
											<?php foreach ($errors as $error) : ?>
												<?php echo $error; ?>
											<?php endforeach; ?>
										<?php endif ?>
									</span>
								</div>
								<div class="form-group">
									<label for="password">E-Mail Address</label>
									<input class="form-control" type="password" name="password" id="password" placeholder="Enter password">
									<span class="error ">*
										<?php if (count($errors1) > 0) : ?>
											<?php foreach ($errors1 as $error) : ?>
												<?php echo $error; ?>
											<?php endforeach; ?>
										<?php endif ?>
									</span>
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox custom-control-inline">
										<input id="chk1" type="checkbox" name="chk" class="custom-control-input">
									</div>
								</div>
								<div class="form-group text-center">
								<button type="submit" name="loginBtn" class="btn btn-primary"> click me</button>
								</div>
							</form>

						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		if(window.history.replaceState){
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
</body>
</html>