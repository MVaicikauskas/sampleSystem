<?php 
 include 'layout/header.php';
 $mf = $fm = $kgpnd = $pndkg = $cf = $fc = $err = $mfmess = $fmmess = $kgpndmess = $pndkgmess = $cfmess = $fcmess = $color = '';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    if((isset($_POST['meters1']) && isset($_POST['feets2'])) || (isset($_POST['meters2']) && isset($_POST['feets1'])) || (isset($_POST['kilograms1']) && isset($_POST['pounds2'])) || (isset($_POST['kilograms2']) && isset($_POST['pounds1'])) || (isset($_POST['celsius1']) && isset($_POST['faren2'])) || (isset($_POST['celsius2']) && isset($_POST['faren1']))){
        $mf = $_POST['amount']* 3.28084;
        $mfmess =  $_POST['amount']." of meters converted to feets is ".$mf;
        $fm = $_POST['amount']/3.28084;
        $fmmess =  $_POST['amount']." of feets converted to meters is ".$fm;
        $kgpnd = $_POST['amount']*2.2;
        $kgpndmess =  $_POST['amount']." of kilograms converted to pounds is ".$kgpnd;
        $pndkg = $_POST['amount']/2.2;
        $pndkgmess =  $_POST['amount']." of pounds converted to kilograms is ".$pndkg;
        $color = 'success';

    } else{
        $err = 'Wrong or wrongly chosen measurement units!!!';
        $color = 'danger';
    }
}
?>

<form action="" method="POST">
    <div class="container mt-3">
        <label for="measure1" class="form-control">convert from:</label>
        <div class="mb-3 form-check">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="meters1" name="meters1">
                <label class="form-check-label" for="exampleCheck1">Meters</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="feets1" name="feets1">
                <label class="form-check-label" for="exampleCheck1">Feets</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="kilograms1" name="kilograms1">
                <label class="form-check-label" for="exampleCheck1">Kilograms</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="pounds1" name="pounds1">
                <label class="form-check-label" for="exampleCheck1">Pounds</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="celsius1" name="celsius1">
                <label class="form-check-label" for="exampleCheck1">Celsius</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="faren1" name="faren1">
                <label class="form-check-label" for="exampleCheck1">Farenheit</label>
            </div>
        </div>
        <label for="amount" class="form-control">Amount:</label>
        <input type="text" class="form-control mb-3" name="amount">
    </div>
    <hr>
    <div class="container">
        <label for="measure2" class="form-control">convert to:</label>
        <div class="mb-3 form-check">
        <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure2" value="meters2" name="meters2">
                <label class="form-check-label" for="exampleCheck1">Meters</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure2" value="feets2" name="feets2">
                <label class="form-check-label" for="exampleCheck1">Feets</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure2" value="kilograms2" name="kilograms2">
                <label class="form-check-label" for="exampleCheck1">Kilograms</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure2" value="pounds2" name="pounds2">
                <label class="form-check-label" for="exampleCheck1">Pounds</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="celsius2" name="celsius2">
                <label class="form-check-label" for="exampleCheck1">Celsius</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="faren2" name="faren2">
                <label class="form-check-label" for="exampleCheck1">Farenheit</label>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mb-5">Patvirtinti</button>
    </div>
    <hr>
    <div class="container py-4">
     <div class="row justify-content-center">
         <div class="col-md-6">
             <div class="alert alert-<?php echo $color?>" role="alert">
                <?php 
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    if((isset($_POST['meters1']) && isset($_POST['feets2'])) || (isset($_POST['meters2']) && isset($_POST['feets1'])) || (isset($_POST['kilograms1']) && isset($_POST['pounds2'])) || (isset($_POST['kilograms2']) && isset($_POST['pounds1']))){
                        if(isset($_POST['meters1']) && isset($_POST['feets2'])){
                            $mf = $_POST['amount']* 3.28084;
                            $mfmess =  $_POST['amount']." of meters converted to feets is ".$mf; 
                            $color = 'success';
                            echo $mfmess;
                        };
                        if(isset($_POST['meters2']) && isset($_POST['feets1'])){
                            $fm = $_POST['amount']/3.28084;
                            $fmmess =  $_POST['amount']." of feets converted to meters is ".$fm;
                            $color = 'success';
                            echo $fmmess;
                        };
                        if(isset($_POST['kilograms1']) && isset($_POST['pounds2'])){
                            $kgpnd = $_POST['amount']*2.2;
                            $kgpndmess =  $_POST['amount']." of kilograms converted to pounds is ".$kgpnd;
                            $color = 'success';
                            echo $kgpndmess;
                        };
                        if(isset($_POST['kilograms2']) && isset($_POST['pounds1'])){
                            $pndkg = $_POST['amount']/2.2;
                            $pndkgmess =  $_POST['amount']." of pounds converted to kilograms is ".$pndkg;
                            $color = 'success';
                            echo $pndkgmess;
                        }
                        if(isset($_POST['celsius1']) && isset($_POST['faren2'])){
                            $cf = $_POST['amount']*33.8;
                            $cfmess =  $_POST['amount']." of celsius converted to farehnheits is ".$cf;
                            $color = 'success';
                            echo $pndkgmess;
                        }
                        if(isset($_POST['celsius2']) && isset($_POST['faren1'])){
                            $cf = $_POST['amount']/33.8;
                            $cfmess =  $_POST['amount']." of farehnheit converted to celsius is ".$fc;
                            $color = 'success';
                            echo $pndkgmess;
                        }
                        
                
                    } else{
                        $err = 'Wrong or wrongly chosen measurement units!!!';
                        $color = 'danger';
                        echo $err;
                    }
                }
                ?>
             </div>
         </div>

     </div>
</div>    

</form>

<?php
 include 'layout/footer.php';
?> 