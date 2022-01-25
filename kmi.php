<?php 
 include 'layout/header.php';


    
?>
<form action="" method="GET">
    <div class="form-group container">
        <label for="weight" class="form-label">Įveskite savo svori (kg)</label>
        <input type="text" name="weight" id="weight" class="form-control">
        <label for="height" class="form-label">Įveskite savo ūgi (cm)</label>
        <input type="text" name="height" id="height" class="form-control mb-3">
        <button type="submit" class="btn btn-primary">Patvirtinti</button>
    </div>
</form>

<?php
    $weight = $_GET['weight'];
    $height = $_GET['height'];
    $res = '';
    $color = 'light';
    $message = 'Waiting for info...';
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $res = $weight/(($height/100)^2);
        if($res < 18.5){
            $color = 'danger';
            $message = 'Your KMI is '.$res.'. You are too slim!!!';
        };
        if($res > 25){
            $color = 'danger';
            $message = 'Your KMI is '.$res.'. You hase some overweight!!!';
        } else {
            $color = 'success';
            $message = 'Your KMI is '.$res.' and it is good!!!';
        };
    };
?>

<div class="container py-4">
     <div class="row justify-content-center">
         <div class="col-md-6">
             <div class="alert alert-<?php echo $color?>" role="alert">
                <?php echo $message; ?>
             </div>
         </div>

     </div>
</div>    

<?php
 include 'layout/footer.php';
?> 