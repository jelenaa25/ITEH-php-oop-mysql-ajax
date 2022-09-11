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
 
        public static function login($korisnik, $conn){
            $upit = "Select * from korisnik where email='$korisnik->email' and lozinka= '$korisnik->lozinka'";

            $status= $conn->query($upit);
            
            return  $status;
        }

        public static function register($korisnik,$conn){
            $upit = "insert into korisnik (ime_prezime,email,lozinka) values('$korisnik->ime_prezime','$korisnik->email' ,'$korisnik->lozinka') ";
        
            return $conn->query($upit);
    
        }



    }
    

   



?>