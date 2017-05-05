<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Store</title>
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
			padding: 15px;
			margin: 10px;
			color: #fff;
			width: 100%;
		}
		#button{
			background: transparent;
			border:1px solid #fff;
			box-shadow: 0;
			padding: 15px;
			margin: 10px;
			color: #fff;
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

<div class="wrapper">
		 <div class="wrapper flex-center position-ref full-height">
			<div class="row">
				
				<div class="col-md-12">
					<h1 style="color: #fff;" class="text-center">Online Book Store <br><br> Login</h1>
					<div class="container" style="width: 60%;margin: auto;">
							
							 <div class="row form">
			                    <form method="POST" action="authHandler.php">
				                    <div class="col-md-12">
				                        <input type="text" name="email"  placeholder="Email Id" required autocomplete="off">
				                    </div>
				                    <div class="col-md-12">
				                        <input type="password" name="password"  placeholder="Password Here" required autocomplete="off">
				                    </div>
				                    <div class="col-md-12">
				                        <input type="submit" name="login" value="Login" id="button">
				                    </div>
			                    </form>
			                    
			                    
			                </div>
			                <br><br>
			                	<center>
			                		<a href="register.php">Register</a> &nbsp; | &nbsp; <a href="index.php">Home</a>
			                	</center>		
					</div>
				
	                
				</div>
				<div class="col-md-3">
					
				</div>
			</div>
		</div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/bootstrap.js"></script>
</body>
</html>