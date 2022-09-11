<?php
    include '../dbbroker.php';
    include '../model/Nakit.php'; 

    
    if ( isset($_POST['naziv']) && isset($_POST['opis']) && isset($_POST['cena'])   ) {
        
        

        

        
        $nakit = new Nakit(null,$_POST['naziv'],$_POST['opis'],$_POST['cena'],$_POST['kategorije']);
  
       
        $status=Nakit::dodajNakit($nakit,$conn);
        
        
            
            if($status){
                
                echo 'Success';
            }else{
                echo $status;
                echo 'Failed';
            }



      }else{
          echo "Failed";
      }
 




?>