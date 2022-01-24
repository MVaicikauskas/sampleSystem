<?php
include 'layout/header.php'; // jeigu include nerand faila arba yra kokia klaida, tuomet include duoda tik warning
//require ''; // jei bus klaidu mes fatal error ir nutruks kodas, jis nebevyks
if($_GET){
    echo "welcome ".$_GET['username']."!";
}

?>

<?php include 'layout/footer.php'; ?>