<?php

$stmt = $connection->prepare("SELECT * FROM users WHERE Email = ? AND Password = ?"); 
	$stmt->execute([ $email, $hash ]); 
	$user = $stmt->fetch();

?>