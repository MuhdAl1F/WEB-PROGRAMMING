<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM tayangan where id = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
	<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		body{
			background-image: url("batik.jpg");
		}
		
		</style>
		
		<title>Edit</title>
		
	</head>
	
	<body>
	<pre>
<center>
<h1>Nama Sistem : Online Ticket Booking (OTB)</h1>        
Nama Programmer : <a href="alif.php">Staff (Alif Azni)</a>
</center> 
</pre>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="st.php">Senarai Filem</a></li>
            <li><a href="sp.php">Daftar Filem</a></li>
            <li><a href="../index.php">Log out</a></li>
        </ul>
    </nav>
		
		<div class="container">
     
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Edit Student Information</h3>
					
				</div>
		 
				<form class="form-horizontal" action="dataedittb.php?id=<?php echo $id?>" method="post">
					<div class="control-group">
						<label class="control-label">ID Filem</label>
						<div class="controls">
							<input name="id" type="text"  placeholder="" value="<?php echo $data['id'];?>" >
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Nama Filem</label>
						<div class="controls">
							<input name="Movie" type="text"  placeholder="" value="<?php echo $data['Movie'];?>" required>
						</div>
					</div>
					
					
					<div class="control-group">
						<label class="control-label">Tarikh</label>
						<div class="controls">
							<input name="Date" type="date" placeholder="" value="<?php echo $data['Date'];?>" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Masa</label>
						<div class="controls">
							<input name="Time" type="time"  placeholder="" value="<?php echo $data['Time'];?>" required>
						</div>
					</div>
					
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Update</button>
						<a class="btn" href="st.php">Back</a>
					</div>
				</form>
			</div>               
		</div> <!-- /container -->	
	</body>
</html>