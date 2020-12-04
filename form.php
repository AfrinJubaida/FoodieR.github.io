<?php
include_once("ceo/config.php"); 

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql = "INSERT INTO subscriber (subscriber)
VALUES ('".$_POST['subscriber']."')";

if ($link->query($sql) === TRUE) {
	header("location:subscribed.html");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>