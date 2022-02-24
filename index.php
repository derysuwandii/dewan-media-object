<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Media Object</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-success fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Demo Media Object Bootstrap 4</h2><hr>
		
		<h4 class="bg-success text-white mt-5">Media Object Standar</h4>
		<div class="media border p-3">
			<img src="avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			<div class="media-body">
			  <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>      
			</div>
		</div>

		<h4 class="bg-success text-white mt-5">Nested Media Objects</h4>
		<div class="media border p-3">
			<img src="avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			<div class="media-body">
			  <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

			  <div class="media p-3">
			    <img src="avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			    <div class="media-body">
			      <h4>Jane Doe <small><i>Posted on February 20 2016</i></small></h4>
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    </div>
			  </div>  
			</div>
		</div>

		<h4 class="bg-success text-white mt-5">Right Aligment Media Image</h4>
		<div class="media border p-3">
		    <div class="media-body">
		      <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>      
		    </div>
		    <img src="avatar3.png" alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:60px;">
		</div>

		<h4 class="bg-success text-white mt-5">Media Image Position</h4>
		<div class="row">
			<div class="col-sm-4">
				<div class="media">
					<img src="avatar1.png" class="align-self-start mr-3" style="width:60px">
					<div class="media-body">
					  <h4>Media Top</h4>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="media">
					<img src="avatar1.png" class="align-self-center mr-3" style="width:60px">
					<div class="media-body">
					  <h4>Media Middle</h4>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="media">
					<img src="avatar1.png" class="align-self-end mr-3" style="width:60px">
					<div class="media-body">
					  <h4>Media Bottom</h4>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>

		<h4 class="bg-success text-white mt-5">Media List</h4>
		<ul class="list-unstyled">
			<li class="media">
				<img src="avatar1.png" class="mr-3" style="width:60px" alt="user">
				<div class="media-body">
				  <h5 class="mt-0 mb-1">List-based media object</h5>
				  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				</div>
			</li>
			<li class="media my-4">
				<img src="avatar2.png" class="mr-3" style="width:60px" alt="user">
				<div class="media-body">
				  <h5 class="mt-0 mb-1">List-based media object</h5>
				  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				</div>
			</li>
			<li class="media">
				<img src="avatar3.png" class="mr-3" style="width:60px" alt="user">
				<div class="media-body">
				  <h5 class="mt-0 mb-1">List-based media object</h5>
				  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				</div>
			</li>
		</ul>
	</div>

	<div class="navbar bg-dark">
		<div class="text-white">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>
</body>
</html>