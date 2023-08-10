<?php
    include_once('link.php');
    include_once('header.php');
	require_once('connection.php');
    ?>
<html>
	<head>
		<title>Content Management Tool</title>
		 <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    .intro {
      text-align: center;
      padding: 50px 0;
    }
    
    .features {
      display: flex;
      justify-content: space-between;
      padding: 50px;
      background-color: #f9f9f9;
    }
    
    .feature {
      text-align: center;
      width: 30%;
    }
    
    .feature img {
      width: 80%;
      margin: 20px auto;
      border-radius: 50%;
    }
    
    .feature h3 {
      margin-top: 0;
    }
    
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
	</head>
	<body>
	<body background = "img/back.png">
		<div class="header">
    <h1>Content Management Tool</h1>
  </div>
  
  <div class="intro">
    <h2>Welcome to Content Management Tool</h2>
  </div>
  
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
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
						</th>
						</div>
					  </div>
					  </tr><br>
					  <tr align="center">
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
						  <button type="submit" name="login" class="btn btn-primary">Login</button> &nbsp;
						   <a href="http://localhost/Content%20Management%20tool/registration.php" class="btn btn-success">Register now</a></th>
						</div>
					  </div>
					  </tr>
					</form>
				</div>
		</table>
		<br><br><br><br><br><br><br><br><br>
		<div class="footer">
    <p>&copy; 2023 Aman Singh All Rights Reserved</p>
  </div>
	</body>
</html>	
