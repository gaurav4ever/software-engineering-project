<?php 
		require 'connection.php';
		mysql_select_db('se');
 		session_start();

 		if(isset($_POST['buy_book_button'])){
 			$book_id=$_POST['book_id'];
 			$user_id=$_SESSION['user_id'];
 			$sql="UPDATE `books` SET `sold`='1',`bought_buy`='$user_id' WHERE id='$book_id'";
 			if(!mysql_query($sql))die("database error");
 		}

 		$sql="SELECT * FROM `books` WHERE Sold=0";
 		$retval=mysql_query($sql);
 		if(!mysql_query($sql))die("database error");

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
			color: #efefef;
		}
		.container{
			width: 100%;
			margin: auto;
			padding: 0;
		}
		.header{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}
		.header{
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
		.book_row{
			width: 90%;
			margin: auto;
			color: #000;
			margin-top: 10px;
			padding: 20px;
			background: #f0f0f0;
			border-radius: 5px;
        	box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
		}
		td{
			padding: 20px;
		}
		#head{
			font-weight: bold;
		}
		#button{
			margin: 5px;
			padding: 10px 20px 10px 20px;
			color: #fff;
			background: #1B5E20;
			border-radius: 5px;
			border:0;
			font-size: 14px;
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
						<a href="sellbooks.php" style="color: #A5D6A7;">Sell Book</a> 
						&nbsp;&nbsp;
						<a href="allbooks.php">Buy Books</a></h4>
					</div>
					<div class="col-md-4">
						<h4 class="pull-right"><a href="mybooks.php">My Books</a></h4>
					</div>
				</div>
		</div>
		<br><br>
		<div class="wrapper">
			<?php 

				while($val=mysql_fetch_assoc($retval)){

					$user_id=$val['sold_by'];
					$sql_user="SELECT * FROM users WHERE id='$user_id'";
					$val_user=mysql_fetch_assoc(mysql_query($sql_user));
			 ?>
				<div class="row book_row">
				
					<div class="col-md-4">

						<center>
						<table>
							<tr>
								<td id="head">Book Name</td>
								<td>:</td>
								<td><?php echo $val['name']; ?></td>
							</tr>
							<tr>
								<td id="head">Book Publisher</td>
								<td>:</td>
								<td><?php echo $val['publisher']; ?></td>
							</tr>
							<tr>
								<td id="head">Selling Price</td>
								<td>:</td>
								<td><?php echo $val['price']; ?></td>
							</tr>
							<tr>
								<td id="head">Seller Name</td>
								<td>:</td>
								<td><?php echo $val_user['username']; ?></td>
							</tr>
							<tr>
								<td id="head">Email ID</td>
								<td>:</td>
								<td><?php echo $val_user['email']; ?></td>
							</tr>
						</table>
						</center>
					</div>
					<div class="col-md-4">
						<center>
						<table>
							<tbody>
								<tr>
									<td id="head">Book Author</td>
									<td>:</td>
									<td><?php echo $val['author']; ?></td>
								</tr>
								<tr>
									<td id="head">Book Edition</td>
									<td>:</td>
									<td><?php echo $val['edition']; ?></td>
								</tr>
							</tbody>
						</table>
						</center>
					</div>
					<div class="col-md-4">
						<img style="width: 200px;" src="<?php echo $val['image'];?>">
					</div>
					<div class="col-md-12">
						<button type="submit" name="submit" id="button" class="pull-right" data-toggle="modal" data-target="#myModal_<?php echo $val['id']?>">Buy This Book</button>
					</div>
				</div> 


				<!-- Modal -->
						<div class="modal fade" id="myModal_<?php echo $val['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-body" style="padding: 20px;">
						      		<center>
						      		
							      		<h2 style="color: #1B5E20;">Buy this Book?</h2>
							      		<hr>
							      		<form method="POST" action="allbooks.php">
							      			<input type="text" name="book_id" id="book_id" value="<?php echo $val['id']?>" hidden>
								        	<button type="submit" name="buy_book_button" id="button">Yes</button>
								        	<button name="buy_book_button" id="button" data-dismiss="modal">No</button>
							        	</form>
						        	</center>
						      </div>
						    </div>
						  </div>
						</div>




				<?php 
					}
				 ?>
		</div>

		<br><br><br><br>
	</div

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/jquery-1.12.3.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>