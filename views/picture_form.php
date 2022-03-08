<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include '../layout/header.php';
?>

<div class="container">
    <h2>Picture upload form</h2>
    <form action="http://192.168.64.2/Intro/dist/php/sampleSystem/scripts/picture_upload.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formFile" class="form-label">Choose picture to upload</label>
            <input class="form-control" type="file" id="formFile1" name="formFile1">
            <label for="pictureName">Write picture name here:</label>
            <input type="text" name="name1" class="form-control">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Choose picture to upload</label>
            <input class="form-control" type="file" id="formFile2" name="formFile2">
            <label for="pictureName">Write picture name here:</label>
            <input type="text" name="name2" class="form-control">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Choose picture to upload</label>
            <input class="form-control" type="file" id="formFile3" name="formFile3">
            <label for="pictureName">Write picture name here:</label>
            <input type="text" name="name3" class="form-control">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Choose picture to upload</label>
            <input class="form-control" type="file" id="formFile4" name="formFile4">
            <label for="pictureName">Write picture name here:</label>
            <input type="text" name="name4" class="form-control">
        </div>
        <label for="exampleDataList" class="form-label">Choose gallery background color:</label>
        <input class="form-control mb-3" list="datalistOptions" id="exampleDataList" placeholder="Choose color...">
        <datalist id="datalistOptions" name="color">
            <option value="warning">
            <option value="info">
            <option value="Success">
            <option value="danger">
            <option value="light">
        </datalist>
        
        <button type="submit" class="btn btn-lg btn-primary">Upload</button>
    </form>
</div>    




<?php
include '../layout/footer.php';
?>
