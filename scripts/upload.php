<?php 
if(isset($_FILES['picturesToUpload'])){
    $targetDir = "../uploads/";//kur saugosim, dedame gale / nes lendame i p ati kataloga
    $targetFile = $targetDir.basename($_FILES['pictureToUpload']['name']);// susideliojame pati faila, bet jo dar nera
    $uploadValid = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));//paiame extension jpg png ir t.t.


    //check if file is image
    $check = getimagesize($_FILES['pictureToUpload']['tmp_name']);// yra jau sugeneruotas failas
    if($check !== false){
        echo "file is an image - ". $check["mime"];
    } else {
        echo "file is not an image";
        $uploadValid = 0;
    }
    //check if file exists
    if(file_exists($targetFile)){
        echo "file already exists!";
        $uploadValid = 0;
    }

    // limit of file size
    if($_FILES['pictureToUpload']['size'] > 1000000){//[failas][jo parametrai]
        echo "File is to large!";
        $uploadValid = 0;
    } 

    //check if file extension is accepted 

    $extensions = ["jpeg","jpg","png"];

    if(in_array($imageFileType, $extensions) === false){
        echo "Only jpeg, jpg, png files are allowed.";
        $uploadVAlid = 0;
    }

    //upload file

    if($uploadValid == 0){
        echo "File is not uploaded";
    } else {
        if(move_uploaded_file($_FILES['pictureToUpload']['tmp_name'],$targetFile)){ //$targerFile failas yra $tempFile failo nera
            echo "File was uploaded!";
        } else{
            echo "Error occured, please try again!";
        }
    }
}



?>
<img src="<?php echo $targetFile; ?>" alt="">