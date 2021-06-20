<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
		$Movie = $_POST['Movie'];
		$Date= $_POST['Date'];
		$Time= $_POST['Time'];

		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO tayangan (id, Movie,Date, Time) values(?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($id,$Movie,$Date,$Time));
		Database::disconnect();
		header("Location: st.php");
    }
?>