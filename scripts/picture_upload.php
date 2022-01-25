<?php
var_dump ($_POST);

$title1=$title2=$title3=$title4=$color= "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_FILES['formFile1']) && !empty($_FILES['formFile2']) && !empty($_FILES['formFile3']) && !empty($_FILES['formFile4']) && !empty($_POST['name1']) && !empty($_POST['name2']) && !empty($_POST['name3']) && !empty($_POST['name4'])) {
        $counter = 1;
        
        foreach ($_FILES as $image) {
            
            $targetDir = "../uploads/";
            $imageName = "image" . $counter . ".jpg";
            $targetFile = $targetDir . basename($image['name']);
            
            $uploadValid = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $targetFile = $targetDir . $imageName;
            $tempFile = $image['tmp_name'];
            
            $check = getimagesize($tempFile);
            if ($check !== false) {
                
            } else {
                // echo "test";
                include 'gallery_error.php';
                die;
                
            }

            //limit file size
            // if ($_FILES['pictureToUpload']['size'] > 1000000) {
            //     echo "File is too large";
            //     $uploadValid = 0;
            // }

            //check if file extension is accepted
            $extensions = ["jpg"];

            if (in_array($imageFileType, $extensions) === false) {
                include 'gallery_error.php';
                die;
            }

            //upload file

            if (!move_uploaded_file($tempFile, $targetFile)) {
                echo $targetFile;
                include 'gallery_error.php';
                die;
            }
            $counter++;

        }
        $title1=$_POST['name1'];
        $title2=$_POST['name2'];
        $title3=$_POST['name3'];
        $title4=$_POST['name4'];
        $color = "bg-".$_POST['color'];
        include 'gallery.php';
    } else {
        // echo "test";
        include 'gallery_error.php';
        die;
    }

} else {
    
    include '../views/gallery.php/';
}