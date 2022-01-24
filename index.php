<?php
include 'layout/header.php';

$usernameValue = $emailValue = $passError = '';
if($_GET){
    $usernameValue = $_GET['username'];
    $emailValue = $_GET['email'];
    $passError = $_GET['error'];
}

?>


<div class="container">
    <h2>Please fill registration form!</h2>
    <form action="http://192.168.64.2/Intro/dist/php/sampleSystem/scripts/register.php" method="GET">
        <div class ="form-floating">
            <input type="text" name="username" class="form-control" required value="<?php echo $username; ?>">
            <label for="userName">Username</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" name="email" required value="<?php echo $email; ?>">
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating">
            <input type="password" name= "password" class="form-control" required >
            <label for="password">Password</label>
        </div>
        <div class="form-floating">
            <span class="badge bg-danger"><?php echo $passError ?></span>
            <input type="password" name="confirmPassword" class="form-control" required>
            <label for="confirmPassword">Confirm Password</label>
        </div>
        <button type="submit" class="btn btn-lg btn-primary">Register</button>
    </form>
</div>    


<?php
include 'layout/footer.php';
?>
