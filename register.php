<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>GPS | Login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		body{
			font-family: 'Roboto', sans-serif;
			background: #43A047;
		}
		.wrapper{
			width: 90%;
			margin:auto;
		}
		.full-height {
		    height: 100vh;
		}
		.flex-center {
		    align-items: center;
		    display: flex;
		    justify-content: center;
		    
		}
		.position-ref {
		    position: relative;
		}
		input{
			background: transparent;
			border:1px solid #fff;
			box-shadow: 0;
			padding: 8px;
			margin: 10px;
			color: #fff;
			width: 100%;
		}
		#button{
			background: transparent;
			border:1px solid #1B5E20;
			box-shadow: 0;
			padding: 8px;
			margin: 10px;
			color: #1B5E20;
			font-weight: bold;
			width: 100%;
		}
		input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
		    color:    #fff;
		}
		input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		   color:    #fff;
		   opacity:  1;
		}
		input::-moz-placeholder { /* Mozilla Firefox 19+ */
		   color:    #fff;
		   opacity:  1;
		}
		input:-ms-input-placeholder { /* Internet Explorer 10-11 */
		   color:    #fff;
		}
		a{
			color: #fff;
			text-decoration: none;
			font-size: 16px;
		}
		a:hover{
			color: #fff;
			text-decoration: none;
		}
	</style>
</head>
<body>

	<div class="wrapper flex-center position-ref full-height">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">

				
				<h1 style="color: #fff;" class="text-center">Register</h1>


				 <div class="row form">
                    <form method="POST" action="authHandler.php">
                    	<div class="col-md-12">
	                        <input type="text" name="username"  placeholder="Full Name" required autocomplete="off">
	                    </div>
	                    <div class="col-md-12">
	                        <input type="text" name="email"  placeholder="Email Id" required autocomplete="off">
	                    </div>
	                    <div class="col-md-12">
	                        <input type="text" name="mobile"  placeholder="Mobile Number" required autocomplete="off">
	                    </div>
	                    <div class="col-md-12">
	                        <input type="password" name="password"  placeholder="Password Here" required autocomplete="off">
	                    </div>
	                    <div class="col-md-12">
	                        <input type="password" name="password2"  placeholder="Re-Enter Password Here" required autocomplete="off">
	                    </div>
	                    <div class="col-md-12">
	                        <input type="submit" name="register" value="Register" id="button">
	                    </div>
                    </form>
                    
                    
                </div>
                <br><br>
                	<center>
                		<a href="login.php">Login</a> &nbsp; | &nbsp; <a href="index.php">Home</a>
                	</center>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>