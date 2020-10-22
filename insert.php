<?php
$username = "root";
$password = "toor";
$database = "testdb";

$mysqli = new mysqli("localhost", $username, $password, $database);

$field1 = $mysqli->real_escape_string($_POST['field1']);
$field2 = $mysqli->real_escape_string($_POST['field2']);
$field3 = $mysqli->real_escape_string($_POST['field3']);
$field4 = $mysqli->real_escape_string($_POST['field4']);
$field5 = $mysqli->real_escape_string($_POST['field5']);

$query = "INSERT INTO test12 (col1, col2, col3, col4, col5)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}')";

$mysqli->query($query);
$mysqli->close();
?>
