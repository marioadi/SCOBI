<?php

try {
	$pdo = new PDO("mysql:dbname=scobi;host=localhost", "mariojunior", "admproject123");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	DIE($e->getMessage());
}

?>