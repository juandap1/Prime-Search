<?php
include('db.class.php'); // call db.class.php
$mydb = new db(); // create a new object, class db()
$conn = $mydb->connect();
$resultQuery = $conn->prepare("SELECT lastChecked FROM primefactory WHERE id = 1");
$resultQuery->execute();
$last = $resultQuery->fetchColumn();
echo $last;
?>