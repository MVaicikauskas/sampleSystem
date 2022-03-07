<?php

//Jungiame duomenu baze
require_once("../db_connection.php");


//Gauname duomenis is formos ir sukeliame i kintamuosius
if($_POST){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

} else {
    header("Location: ../");
    die;
}

//sukeliame duomenis i duomenu baze
if($password ==$confirmPassword){
    $password = password_hash($password, PASSWORD_BCRYPT);
    echo $firstName.$lastName.$email.$password;
} else {
    header("Location: ../");
    die;
}

try{
   $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
$querry = $conn->prepare($sql);
$querry->execute(); 
header("Location: ../views/login.php");
} catch(PDOException $e) {
    echo "Insert field failed: ".$e->getMessage();
}



?>