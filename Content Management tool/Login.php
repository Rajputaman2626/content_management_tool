<?php
require_once('connection.php');
    include_once('header.php');
    include_once('link.php');
    $email = $password = $pwd = '';
    if($_POST){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $password = $pwd;
    $sql = "SELECT * FROM user_form WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        $id = $row["s.no"];
        $email = $row["Email"];
        $_SESSION['s.no'] = $id;
        $_SESSION['email'] = $email;
      }
      header("Location: Account.php");
	  exit();
    }
    else
    {
	echo "<p style=color:red>Incorrect Login Details...</p>";
    }
  }
  ?>
  
  <!--Into this file, we create a layout for login page.-->
  
<html>
	<head>
		<title>Content Management Tool</title>
	</head>
	<body>
	<br/><br/><br/><br/><br/>
	<body background = "img/back.png">
		<table width="30%" border="0px" align="center" bgcolor="skyblue" >
			<tr align="center">
				<div id="frmRegistration">
					<form class="form-horizontal" method="POST" action="login.php">
					 <th> <h1>User Login</h1></td>
			</tr>
					 <tr align="center">
					  <div class="form-group">
					  <th>
						<div class="col-sm-6">
						  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"></th>
						</div>
					  </div>
					  </tr>
					  <tr align="center"> <br>
					  <div class="form-group">
					  <th>
						<div class="col-sm-6"> 
						  <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password"></th>
						</div>
					  </div>
					  </tr>
					  <tr align="center">
					  <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						<th><br>
						  <button type="submit" name="login" class="btn btn-primary">Login</button>
						   <a href="http://localhost/login_system/registration.php" class="btn btn-success">Register now</a></th>
						</div>
					  </div>
					  </tr>
					</form>
				</div>
		</table>
	</body>
</html>