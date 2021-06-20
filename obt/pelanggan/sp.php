<!DOCTYPE html>
<html lang="en">
<head>
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
			background-color: #2b5761;
			width: 100%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #25383C;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}

		</style>
</head>
<body>
<pre>
<center>
<h1>Nama Sistem : Online Ticket Booking (OTB)</h1>  
Nama Programmer : <a href="radzi.php">Pelanggan (Radzi)</a>
</center> 
</pre>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="st.php">Update Ticket</a></li>
            <li><a href="sp.php">Booking Ticket</a></li>
            <li><a href="../index.php">Log out</a></li>
        </ul>
    </nav>
    <div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: blue;">
				<div class="row">
					<h3 align="center">Booking Ticket</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID Filem</label>
						<div class="controls">
							<textarea name="id"  placeholder="" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					
					<div class="control-group" action="insertDB.php" method="post">
						<label class="control-label">Nama Filem </label>
						<div class="controls">
							<input id="div_refresh" name="Movie" type="text"  placeholder="" required>
						</div>
					</div>
					<div class="control-group" action="insertDB.php" method="post">
						<label class="control-label">Tarikh</label>
						<div class="controls">
							<input id="div_refresh" name="Date" type="date"  placeholder="" required>
						</div>
					</div>
					<div class="control-group" action="insertDB.php" method="post">
						<label class="control-label">Masa</label>
						<div class="controls">
							<input id="div_refresh" name="Time" type="time"  placeholder="" required>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Save</button>
                    </div>
</body>
</html>

