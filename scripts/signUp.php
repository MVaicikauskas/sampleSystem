<?php

//Jungiame duomenu baze
require_once("../db_connection.php");

//Gauname duomenis is formos ir sukeliame i kintamuosius
if($_POST){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

} else {
    header("Location: ../");
}

//sukeliame duomenis i duomenu baze


?>