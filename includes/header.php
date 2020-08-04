<?php  
require 'config/config.php';
include("includes/classes/User.php");
include("includes/classes/Post.php");

if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}
?>

<html> 
<head>
    <title>Welcome to conneXt</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="top_bar">
        <div class="logo">
            <a href="index.php">conneXt</a>
        </div>
        <nav>
            <a href="<?php echo $userLoggedIn; ?>">
				<?php echo $user['first_name']; ?>
			</a>
            <a href = "index.php"> Home </a>
            <a href = "#"> Messages </a>
            <a href = "#"> Notifications </a>
            <a href = "requests.php"> Users </a>
            <a href = "#"> Settings </a>
            <a href = "includes/handlers/logout.php"> Log out</a>


        </nav>
    </div>
    <div class="wrapper">