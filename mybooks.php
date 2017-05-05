<?php 
		require 'connection.php';
		mysql_select_db('se');
 		session_start();

 		$user_id=$_SESSION['user_id'];

 		$sql1="SELECT * FROM `books` WHERE sold_by='$user_id'";
 		$retval1=mysql_query($sql1);
 		if(!mysql_query($sql1))die("database error");

 		$sql2="SELECT * FROM `books` WHERE bought_buy='$user_id'";
 		$retval2=mysql_query($sql2);
 		if(!mysql_query($sql2))die("database error");
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
			width: 95%;
			margin:auto;
		}
		.book_row{
			width: 95%;
			margin: auto;
			color: #000;
			margin-top: 10px;
			padding: 10px;
			background: #f0f0f0;
			border-radius: 5px;
        	box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
		}
		td{
			padding: 5px;
		}
		#head{
			font-weight: bold;
		}
		.tab-group {
		  list-style: none;
		  padding: 0;
		  margin: 0 0 20px 0;
		}
		.tab-group:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		.tab-group li a {
		  margin-right: 15px;
		  text-decoration: none;
		  padding: 5px;
		  color: #fff;
		  font-size: 20px;
		  float: left;
		  text-align: center;
		  cursor: pointer;
		  border-radius: 2px;
		  -webkit-transition: .5s ease;
		  transition: .5s ease;
		}
		.tab-group li a:hover {
		  color: #ffffff;
		}
		.tab-group .active a {
		  border-bottom: 3px solid #1B5E20;
		  color: #ffffff;
		}
		.tab-content > div:nth-child(2){
		  display: none;
		}
		.tab-content > div:nth-child(3){
		  display: none;
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
						<a href="allbooks.php">Buy Books</a></h4>
					</div>
					<div class="col-md-4">
						<h4 class="pull-right"><a href="allbooks.php">My Books</a></h4>
					</div>
				</div>
		</div>
		<br><br>

				<div class="wrapper">

				<ul class="tab-group">
			        <li class="tab active"><a href="#sold">Books Sold</a></li>
			        <li class="tab"><a href="#bought">Books Bought</a></li>
			        <li class="tab"><a href="#cart">Cart</a></li>
			    </ul>


				<div class="tab-content">
		            <div id="sold">   
		            	<?php 

							while($val1=mysql_fetch_assoc($retval1)){

								$user_id=$val1['sold_by'];
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
											<td><?php echo $val1['name']; ?></td>
										</tr>
										<tr>
											<td id="head">Book Publisher</td>
											<td>:</td>
											<td><?php echo $val1['publisher']; ?></td>
										</tr>
										<tr>
											<td id="head">Selling Price</td>
											<td>:</td>
											<td><?php echo $val1['price']; ?></td>
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
												<td><?php echo $val1['author']; ?></td>
											</tr>
											<tr>
												<td id="head">Book Edition</td>
												<td>:</td>
												<td><?php echo $val1['edition']; ?></td>
											</tr>
										</tbody>
									</table>
									</center>
								</div>
								<div class="col-md-4">
									<img style="width: 200px;" src="<?php echo $val1['image'];?>">

								</div>
							</div> 
							<?php 
								}
							 ?>
		            </div>
		            <div id="bought">   
		            	<?php 

							while($val2=mysql_fetch_assoc($retval2)){

								$user_id=$val2['sold_by'];
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
											<td><?php echo $val2['name']; ?></td>
										</tr>
										<tr>
											<td id="head">Book Publisher</td>
											<td>:</td>
											<td><?php echo $val2['publisher']; ?></td>
										</tr>
										<tr>
											<td id="head">Selling Price</td>
											<td>:</td>
											<td><?php echo $val2['price']; ?></td>
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
												<td><?php echo $val2['author']; ?></td>
											</tr>
											<tr>
												<td id="head">Book Edition</td>
												<td>:</td>
												<td><?php echo $val2['edition']; ?></td>
											</tr>
										</tbody>
									</table>
									</center>
								</div>
								<div class="col-md-4">
									<img style="width: 200px;" src="<?php echo $val2['image'];?>">

								</div>
							</div> 
							<?php 
								}
							 ?>
		            </div>
		            <div id="cart">
		            	<p>
		            		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		            		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		            		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		            		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		            		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		            	</p>
		            </div>
		        </div>


					
				</div>
			
		
		<br><br><br><br>
	</div

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/jquery-1.12.3.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
</script>
</body>
</html>