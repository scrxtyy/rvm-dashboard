
<!doctype html>
<?php
session_start();
$msg = "";
$servername="localhost";
$username="root";
$password= "";
$dbname="adminRVM";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//uncomment line below to check if connection is working:
//echo("connection");
if(isset($_POST['Login'])){
$user=$_POST['username'];
$pass = $_POST['password'];
$query = "SELECT * FROM `log_in` WHERE usern='".$user."' and pw = '".$pass."' ";
$result = mysqli_query($conn, $query);
if($result->num_rows!=0){
while($row=mysqli_fetch_array($result)){

	$user=$_POST['username'];
	$pass = $_POST['password'];

echo'<script type="text/javascript">alert("Log in successful as admin")</script>';
?>
<script type="text/javascript">
window.location.href="rvm-dashboard.leaat/"</script>
<?php

}
}
else{
    $msg = "Incorrect Username or password.";
}
$_SESSION['login'] = true;

}

?>
<html lang="en">
  <head>
  	<title>RVM Monitoring</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

    <link rel="php" href="main.php">

	</head>
	<body>
	<section class="ftco-section" style="padding-top:10pt!important;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5" >
					<h2 class="heading-section" >RVM MONITORING SYSTEM</h2>
                    <p style="align-items: center;">Please enter admin log-in details.</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
					<form action= "<?= $_SERVER['PHP_SELF'] ?>" method="post" class="login-form">
						<h5 style="text-align: center; color:red;"><?php echo $msg; ?></h5>
		      			<div class="form-group">
		      				<input type="text" class="form-control rounded-left" name="username" placeholder="Username" required>
		      			</div>
	            		<div class="form-group d-flex">
	              			<input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
	            		</div>
						<div class="form-group lead" style="font-size:14pt;">
						<label> Select user type: </label>
						<select class="form-select" name="userType">
							<option selected value="admin"> Admin</option>
							<option value="employee">Employee</option>

						</select>
						</div>
	            		<div class="form-group">
	            			<button type="submit" name="Login" class="btn btn-primary rounded submit p-3 px-5">Log In</button>
	            		</div>
	          		</form>
	        	</div>
				</div>
			</div>
		</div>
	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>

</html>

