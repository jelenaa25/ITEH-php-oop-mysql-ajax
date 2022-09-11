<?php
    class Kategorija{
        private $id_kat;
        private $naziv_kat; 

        public function __construct($id_kat=null, $naziv_kat=null){
            $this->id_kat=$id_kat;
            $this->naziv_kat=$naziv_kat; 
        }
 

        public static function vratiSveKategorije($conn){
            $upit = "select * from kategorija";
            return $conn->query($upit);
        }
        

    }
    

   



?>