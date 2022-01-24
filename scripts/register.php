<?php
$username = $email = $password = $confirmPassword = '';
if($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
} else {
    header("Location: http://192.168.64.2/Intro/dist/php/sampleSystem/index.php");
    exit;
}

// echo $username . ' ' . $email . ' ' . $password.' ' . $confirmPassword;
if($password == $confirmPassword) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    // echo $password;
} else {
    header("Location: http://192.168.64.2/Intro/dist/php/sampleSystem/index.php/?username=".$username."&email=".$email."&error=Passwords+do+not+match");
    //header("Location: ../sampleSystem/?error=Password+do+not+match");
    exit;
};

header("Location: http://192.168.64.2/Intro/dist/php/sampleSystem/views/welcome.php/?username=".$username."&email=".$email."");


?>