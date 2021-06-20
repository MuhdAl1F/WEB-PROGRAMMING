<?php
    require 'database.php';
 
    $id= null;
    if ( !empty($_GET['id'])) {
        $id = $_POST['id'];
		$Movie = $_POST['Movie'];
		$Date= $_POST['Date'];
		$Time= $_POST['Time'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
		$Movie = $_POST['Movie'];
		$Date= $_POST['Date'];
		$Time= $_POST['Time'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tayangan  set  Movie =?, Date =?, Time =? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($Movie,$Date,$Time,$id));
		Database::disconnect();
		header("Location: st.php");
    }
?>