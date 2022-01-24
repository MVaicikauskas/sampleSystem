<?php
include '../layout/header.php';
?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_FILES['formFile1'])){
        $targetDir1 = "http://192.168.64.2/Intro/dist/php/sampleSystem/uploads/";
        $targetFile1 = $targetDir1.basename($_FILES['formFile1']['name']);
        $uploadValid1 = 1;
        $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));
        $pictureName1 = $_POST['name1'];

        if($uploadValid1 == 0){
            echo "File is not uploaded";
        } else {
            if(move_uploaded_file($_FILES['formFile1']['tmp_name'],$targetFile1)){ 
                echo "File was uploaded!";
            } else{
                echo "Error occured, please try again!";
            };
        };
    };

    if(isset($_FILES['formFile2'])){
        $targetDir2 = "../uploads/";
        $targetFile2 = $targetDir2.basename($_FILES['formFile2']['name']);
        $uploadValid2 = 1;
        $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));
        $pictureName2 = $_POST['name2'];

        if($uploadValid2 == 0){
            echo "File is not uploaded";
        } else {
            if(move_uploaded_file($_FILES['formFile2']['tmp_name'],$targetFile2)){ 
                echo "File was uploaded!";
            } else{
                echo "Error occured, please try again!";
            };
        };
    };

    if(isset($_FILES['formFile3'])){
        $targetDir3 = "../uploads/";
        $targetFile3 = $targetDir3.basename($_FILES['formFile3']['name']);
        $uploadValid3 = 1;
        $imageFileType3 = strtolower(pathinfo($targetFile3, PATHINFO_EXTENSION));
        $pictureName3 = $_POST['name3'];

        if($uploadValid == 0){
            echo "File is not uploaded";
        } else {
            if(move_uploaded_file($_FILES['formFile3']['tmp_name'],$targetFile3)){ 
                echo "File was uploaded!";
            } else{
                echo "Error occured, please try again!";
            };
        };
    };

    if(isset($_FILES['formFile4'])){
        $targetDir4 = "../uploads/";
        $targetFile4 = $targetDir4.basename($_FILES['formFile4']['name']);
        $uploadValid4 = 1;
        $imageFileType4 = strtolower(pathinfo($targetFile4, PATHINFO_EXTENSION));
        $pictureName4 = $_POST['name4'];

        if($uploadValid4 == 0){
            echo "File is not uploaded";
        } else {
            if(move_uploaded_file($_FILES['formFile4']['tmp_name'],$targetFile4)){ 
                echo "File was uploaded!";
            } else{
                echo "Error occured, please try again!";
            };
        };
    };

    $color = $_POST['colors'];
};
?>

<img src="<?php echo $targetFile1; ?>" class="img-fluid" alt="">
<?php
echo $pictureName1;
?>

<img src="<?php echo $targetFile2; ?>" class="img-fluid" alt="">
<?php
echo $pictureName2;
?>

<img src="<?php echo $targetFile3; ?>" class="img-fluid" alt="">
<?php
echo $pictureName3;
?>

<img src="<?php echo $targetFile4; ?>" class="img-fluid" alt="">
<?php
echo $pictureName4;
?>



<?php
include '../layout/footer.php';
?>