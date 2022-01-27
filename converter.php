<?php 
 include 'layout/header.php';
 $mf = $fm = $kgpnd = $pndkg = $cf = $fc = $mkm = $kmm = $ftm = $mtf = $kmml = $mlkm = $err = $mfmess = $fmmess = $kgpndmess = $pndkgmess = $cfmess = $fcmess = $mkmmess = $kmmmess = $ftmmess = $mtfmess = $kmmlmess = $mlkmmess  = $color = '';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['meters1']) || isset($_POST['feets2']) || isset($_POST['kilometers2']) || isset($_POST['meters2']) || isset($_POST['kilometers1']) || isset($_POST['feets1']) || isset($_POST['kilograms1']) || isset($_POST['pounds2']) || isset($_POST['kilograms2']) || isset($_POST['pounds1']) || isset($_POST['celsius1']) || isset($_POST['faren2']) || isset($_POST['celsius2']) || isset($_POST['faren1']) || isset($_POST['miles1']) || isset($_POST['miles2'])){
        $mf = $_POST['amount']* 3.28084;
        $mfmess =  $_POST['amount']." of meters converted to feets is ".$mf;
        $fm = $_POST['amount']/3.28084;
        $fmmess =  $_POST['amount']." of feets converted to meters is ".$fm;
        $kgpnd = $_POST['amount']*2.2;
        $kgpndmess =  $_POST['amount']." of kilograms converted to pounds is ".$kgpnd;
        $pndkg = $_POST['amount']/2.2;
        $pndkgmess =  $_POST['amount']." of pounds converted to kilograms is ".$pndkg;
        $mkm = $_POST['amount']/1000;
        $mkmmess = $_POST['amount'].' of meters converted to kilometers is '.$mkm;
        $kmm = $_POST['amount']*1000;
        $kmmmess = $_POST['amount'].' of kilometers converted to meters is '.$kmm;
        $ftm = $_POST['amount']/5280;
        $ftmmess = $_POST['amount'].' of feets converted to miles is '.$ftm;
        $mtf = $_POST['amount']*5280;
        $mtfess = $_POST['amount'].' of miles converted to feets is '.$mtf;
        $kmml = $_POST['amount']/1.609344;
        $kmmlmess = $_POST['amount'].' of kilometer converted to miles is '.$kmml;
        $mlkm = $_POST['amount']*1.609344;
        $mlkmmess = $_POST['amount']. 'of miles converted to kilometers is '.$mlkm;

        $color = 'success';

    } else{
        $err = 'Wrongly chosen measurement units!!!';
        $color = 'danger';
    }
}
?>

<form action="" method="POST">
    <div class="container mt-3 bg-warning">
        <label for="measure1" class="">convert from:</label>
        <div class="mb-3 form-check">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="meters1" name="meters1">
                <label class="form-check-label" for="exampleCheck1">Meters</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="kilometers1" name="kilometers1">
                <label class="form-check-label" for="exampleCheck1">Kilometers</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="miles1" name="miles1">
                <label class="form-check-label" for="exampleCheck1">Miles</label>
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
        <label for="amount" class="form-control-lg">Amount:</label>
        <input type="text" class="form-control mb-3" name="amount">
    </div>
    <hr>
    <div class="container mt-3 bg-info">
        <label for="measure2" class="">convert to:</label>
        <div class="mb-3 form-check">
        <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure2" value="meters2" name="meters2">
                <label class="form-check-label" for="exampleCheck1">Meters</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="kilometers2" name="kilometers2">
                <label class="form-check-label" for="exampleCheck1">Kilometers</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure2" value="feets2" name="feets2">
                <label class="form-check-label" for="exampleCheck1">Feets</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="measure1" value="miles2" name="miles2">
                <label class="form-check-label" for="exampleCheck1">Miles</label>
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
                    if((isset($_POST['meters1']) && isset($_POST['feets2'])) || (isset($_POST['meters1']) && isset($_POST['kilometers2'])) || (isset($_POST['meters2']) && isset($_POST['kilometers1'])) || (isset($_POST['miles1']) && isset($_POST['feets2'])) || (isset($_POST['miles2']) && isset($_POST['feets1'])) || (isset($_POST['meters2']) && isset($_POST['feets1'])) || (isset($_POST['kilograms1']) && isset($_POST['pounds2'])) || (isset($_POST['kilograms2']) && isset($_POST['pounds1'])) || (isset($_POST['miles1']) && isset($_POST['kilometers2'])) || (isset($_POST['miles2']) && isset($_POST['kilometers1']))){
                        
                        if(isset($_POST['meters1']) && isset($_POST['feets2'])){
                            $color = 'success';
                            echo $mfmess;
                        };
                        if(isset($_POST['meters2']) && isset($_POST['feets1'])){
                            $color = 'success';
                            echo $fmmess;
                        };
                        if(isset($_POST['meters1']) && isset($_POST['kilometers2'])){
                            $color = 'success';
                            echo $mkmmess;
                        };
                        if(isset($_POST['meters2']) && isset($_POST['kilometers1'])){  
                            $color = 'success';
                            echo $kmmmess;
                        };
                        if(isset($_POST['miles1']) && isset($_POST['feets2'])){
                            $color = 'success';
                            echo $mtfmess;
                        };
                        if(isset($_POST['miles2']) && isset($_POST['feets1'])){  
                            $color = 'success';
                            echo $ftmmess;
                        };
                        if(isset($_POST['miles1']) && isset($_POST['kilometers2'])){
                            $color = 'success';
                            echo $mlkmmess;
                        };
                        if(isset($_POST['miles2']) && isset($_POST['kilometers1'])){  
                            $color = 'success';
                            echo $kmmlmess;
                        };
                        if(isset($_POST['kilograms1']) && isset($_POST['pounds2'])){
                            $color = 'success';
                            echo $kgpndmess;
                        };
                        if(isset($_POST['kilograms2']) && isset($_POST['pounds1'])){
                            $color = 'success';
                            echo $pndkgmess;
                        }
                        if(isset($_POST['celsius1']) && isset($_POST['faren2'])){
                            $color = 'success';
                            echo $pndkgmess;
                        }
                        if(isset($_POST['celsius2']) && isset($_POST['faren1'])){
                            $color = 'success';
                            echo $pndkgmess;
                        }
                        
                
                    } else{
                        $err = 'Wrongly chosen measurement units!!!Try to convert meters to feets or kilometers, feets to miles or meters and so on...';
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