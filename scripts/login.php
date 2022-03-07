<?php

require_once("../db_connection.php");

// susirenkame login info is formos

if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

// issitraukiame users is duomenu bazes

try {
    $sql = "SELECT * FROM users WHERE email='$email'";
$querry = $conn->prepare($sql);
$querry->execute();
$result = $querry->fetch();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage;

}

// patikriname ar yra toks email

if($result){
    // kodas
    $dbPasswordHash = $result['password'];

    // tikriname slaptazodi
    if(password_verify($password, $dbPasswordHash)){
        echo "Log In successful";
    } else {
        echo "password is incorrect";
    }
} else {
    echo "email does not exist";
}

// var_dump($result);

?>