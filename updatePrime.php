<?php
include('db.class.php'); // call db.class.php
$mydb = new db(); // create a new object, class db()
$conn = $mydb->connect();
$prime = $_REQUEST["u"];//prime
$elapsed = $_REQUEST["t"];
$sql = $conn->prepare("UPDATE primefactory SET timeElapsed=".$elapsed.", lastPrime=".$prime.", lastChecked=".$prime." WHERE id = 1");
$sql->execute();
?>