<?php
    class Korisnik{
        private $id_kor;
        private $email; 
        private $lozinka; 


        public function __construct($id_kor=null, $email=null,$lozinka=null){
            $this->id_kor=$id_kor;
            $this->email=$email; 
            $this->lozinka=$lozinka; 

        }
 
 
    }
    

   



?>