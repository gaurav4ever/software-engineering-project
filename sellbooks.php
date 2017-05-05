<?php 
	
	$posted=0;
	$file_name_error=0;
	if(isset($_POST['submit'])){
		require 'connection.php';
		mysql_select_db('se');
 		session_start();

 		$user_id=$_SESSION['user_id'];

 		$name=$_POST['book_name'];
 		$author=$_POST['book_author'];
 		$publisher=$_POST['book_publisher'];
 		$edition=$_POST['book_edition'];
 		$price=$_POST['book_price'];

 		$dir = "images/";
		$file = $dir . basename($_FILES["book_img_name"]["name"]);
		$file_ext=strtolower(end(explode('.',$_FILES['book_img_name']['name'])));
 		$expensions= array("jpg");
 		if(in_array($file_ext,$expensions)=== false){
		     $file_name_error=1;
		  }else{
		  	move_uploaded_file($_FILES['book_img_name']['tmp_name'],$file);
	  		$sql="INSERT INTO `books`(`name`, `author`, `edition`, `publisher`, `price`, `image`, `sold`, `bought_buy`,`sold_by`) VALUES ('$name','$author','$edition','$publisher','$price','$file','0','null','$user_id')";
			if(!mysql_query($sql))die("database error");
			else $posted=1;
		  }
	}
 ?>
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
		.container{
			width: 100%;
			margin: auto;
			padding: 0;
		}
		.header{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			background: #1B5E20;
		}
		.header, .row{
			padding: 10px;
			color: #fff;
		}
		a{
			color: #fff;
		}
		a:hover{
			color: #dcdcdc;
			text-decoration: none;
		}
		h1,h2,h3,h4{
			padding: 0;
			margin: 0;
		}
		.wrapper{
			width: 90%;
			margin:auto;
		}
		.postaddarea{
			width: 90%;
			margin: auto;
			color: #000;
			padding: 10px;
			background: #f0f0f0;
			border-radius: 5px;
        	box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
		}
		td{
			padding: 20px;
			color: #000;
		}
		input{
			padding: 5px;
			border-radius: 5px;
			border:0;
			box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
		}
		#button{
			margin: 20px;
			padding: 10px 20px 10px 20px;
			color: #fff;
			background: #1B5E20;
			border-radius: 5px;
			border:0;
			font-size: 22px;
        	box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
		}
	</style>
</head>
<body>
	<div class="container">
		 <div class="header">
				<div class="row" style="width: 99%;margin: auto;">
					<div class="col-md-8">
						<h4>Scout : Online Book Store
						&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="sellbooks.php">Sell Book</a> 
						&nbsp;&nbsp;
						<a href="allbooks.php" style="color: #A5D6A7;">Buy Books</a></h4>
					</div>
					<div class="col-md-4">
						<h4 class="pull-right"><a href="mybooks.php">My Books</a></h4>
					</div>
				</div>
		</div>
		<br><br>
		<div class="wrapper">
				<form method="POST" action="sellbooks.php" enctype="multipart/form-data">
				<div class="postaddarea">
					<div class="row">
						<div class="col-md-12">
							<div class="form">
								
									<div class="row">
										<div class="col-md-6">
											<center>
											<table>
												<tbody>
													<tr>
														<td>Book Name</td>
														<td>:</td>
														<td><input type="text" name="book_name" required></td>
													</tr>
													<tr>
														<td>Book Publisher</td>
														<td>:</td>
														<td><input type="text" name="book_publisher" required></td>
													</tr>
													<tr>
														<td>Book Image</td>
														<td>:</td>
														<td><input type="file" name="book_img_name" required></td>
													</tr>
												</tbody>
											</table>
											</center>
										</div>
										<div class="col-md-6">
											<center>
											<table>
												<tbody>
													<tr>
														<td>Book Author</td>
														<td>:</td>
														<td><input type="text" name="book_author" required></td>
													</tr>
													<tr>
														<td>Book Edition</td>
														<td>:</td>
														<td><input type="text" name="book_edition" required></td>
													</tr>
													<tr>
														<td>Selling Price</td>
														<td>:</td>
														<td><input type="text" name="book_price" required></td>
													</tr>
												</tbody>
											</table>
											</center>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div> 
				
				<center><button type="submit" name="submit" id="button">Post Ad</button></center>
				</form>
				<?php 
					if($posted==1){
						?>
						<center><h1 style="color: #fff;">Posted</h1></center>
						<?php
					}else if($file_name_error==1){
						?>
						<center><h1 style="color: #fff;">Extension not allowed, please choose a JPG Image.</h1></center>
						<?php
					}
				 ?>
		</div>
	</div

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/jquery-1.12.3.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>