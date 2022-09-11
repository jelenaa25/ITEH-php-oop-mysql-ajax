<?php
    class Korisnik{
        private $id_kor;
        private $ime_prezime;

        private $email; 
        private $lozinka; 


        public function __construct($id_kor=null,$ime_prezime=null, $email=null,$lozinka=null){
            $this->id_kor=$id_kor;
            $this->email=$email; 
            $this->lozinka=$lozinka; 
            $this->ime_prezime=$ime_prezime; 


        }
 
 
    }
    

   



?>