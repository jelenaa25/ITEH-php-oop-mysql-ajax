<?php
    include 'dbbroker.php'; 
    include 'model/korisnik.php';

    session_start();
    if(isset($_POST['login']) ){ //kada korisnik klikne dugme login
        //preuzimamo podatke iz forme 
        $email = $_POST['email'];
        $lozinka = $_POST['lozinka'];

        $korisnik = new Korisnik(null,null,$email,$lozinka);

        $status = Korisnik::login($korisnik,$conn);

        if(mysqli_num_rows($status)>0){
            echo "ULOGOVAN";
            
            header('Location: pocetna.php'); //ako je korisnik ulogovan mozemo da ga posaljemo na glavnu stranicu
        }else{
            echo "GRESKA";
        }


    }

    if(isset($_POST['register']) ){ //kada korisnik klikne dugme register
        //preuzimamo podatke iz forme 
        $email = $_POST['signup_email'];
        $lozinka = $_POST['signup_lozinka']; 
        $imePrezime = $_POST['signup_imePrezime'];
       


       
            $korisnik = new Korisnik(null,$imePrezime,$email,$lozinka);

            $status = Korisnik::register($korisnik,$conn);
    
            if($status){
                echo "Registrovan";
              
                header('Location: index.php'); //ako je korisnik ulogovan mozemo da ga posaljemo na login stranicu
            }else{
                echo "GRESKA";
            }
       

       


    }
 



?>