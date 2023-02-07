<?php
    include '../config.php';
    include '../model/Knjiga.php'; 

    if(isset($_POST['deleteid'])){
        $status=Knjiga::obrisiknjigu($_POST['deleteid'],$conn);
        if ($status){
            echo "Success";
        }else{
            echo "Failed";
        }
    }

?>