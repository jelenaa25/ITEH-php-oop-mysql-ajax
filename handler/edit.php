<?php
    include '../dbbroker.php';
    include '../model/Nakit.php';
    if ( isset($_POST['nazivEdit']) && isset($_POST['opisEdit']) && isset($_POST['cenaEdit'])   ) {
        

            $nakit = new Nakit( $_POST['sakrivenoPoljeID'],$_POST['nazivEdit'],$_POST['opisEdit'],$_POST['cenaEdit'],$_POST['kategorijeEdit']);
            
                
            $status=Nakit::azurirajNakit($nakit,$conn);
              
        
            
            if($status){
                
                echo 'Success';
            }else{
                echo 'Failed';
            }



      }
 




?>