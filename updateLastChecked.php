<?php
include('db.class.php'); // call db.class.php
$mydb = new db(); // create a new object, class db()
$conn = $mydb->connect();
$last = $_REQUEST["u"];//last number checked
$sql = $conn->prepare("UPDATE primefactory SET lastChecked=".$last." WHERE id = 1");
$sql->execute();
?>