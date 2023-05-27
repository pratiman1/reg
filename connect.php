<?php

$conn = new mysqli('localhost','root','','test1');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(name,email,language) value(?,?,?)")
}

$name = $_POST["name"];
$email = $_POST["email"];
$language = $_POST["language"];

$stmt->bind_param("sss", $name, $email, $language);
$stmt->execute();


$stmt->close();
$conn->close();
?>