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
		
		.table {
			margin: auto;
			width: 90%; 
		}
		
		thead {
			color: #FFFFFF;
		}
		tr:nth-child(even) {
        background-color: #ffffff;
       }
		</style>
</head>
<body>
<pre>
<center>
<h1>Nama Sistem : Online Ticket Booking (OTB)</h1>
Nama Programmer : <a href="sahul.php">Manager (Sahul)</a>
</center> 
</pre>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="st.php">Filem Terkini</a></li>
            <li><a href="mu.php">Senarai Maklumat Pelanggan</a></li>
            <li><a href="sp.php">Set Password</a></li>
            <li><a href="../index.php">Log out</a></li>
        </ul>
    </nav>
    <h1>Set Password</h1>
</body>
</html>