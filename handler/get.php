 
<?php
    include '../dbbroker.php';
    include '../model/Nakit.php'; 
 

    if(  isset($_POST['azurirajid'])){
        
        $rez = Nakit::vratiNakit($_POST['azurirajid'],$conn);
    
        $response = array();
        while($red=mysqli_fetch_assoc($rez)){
            $response[] = $red;
        }
       
        echo json_encode($response[0]);
       
    }else{
        
        $response['status']=200; //status OK
        $response['message']="Data not found";
    }
   







?>
 
