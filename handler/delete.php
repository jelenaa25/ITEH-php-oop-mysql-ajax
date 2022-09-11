<?php
    include '../dbbroker.php';
    include '../model/Nakit.php'; 

    if(isset($_POST['deleteid'])){
        $status=Nakit::obrisinakit($_POST['deleteid'],$conn);
        if ($status){
            echo "Success";
        }else{
            echo "Failed";
        }
    }

?>