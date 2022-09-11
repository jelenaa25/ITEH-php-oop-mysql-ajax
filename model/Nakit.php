<?php

    class Nakit{
        private $id;
        private $naziv;
        private $opis;
        private $cena; 
        private $kategorija;


        public function __construct($id=null,$naziv=null,$opis=null,$cena=null,$kategorija=null)
        {
            $this->id=$id;
            $this->naziv=$naziv;
            $this->opis=$opis;
            $this->cena=$cena; 
            $this->kategorija=$kategorija;
        }


        public static function vratiSavnakit($conn){
            $upit = "select * from nakit  n inner join kategorija k on k.id_kat=n.kategorija";
            return $conn->query($upit);
        }

        public static function dodajNakit($nakit, $conn){
            $upit = "insert into nakit(naziv,opis,cena,kategorija) values('$nakit->naziv','$nakit->opis',$nakit->cena,$nakit->kategorija)";
            
            return $conn->query($upit);
        }
        public static function obrisinakit($id, $conn){
            $upit = " delete from nakit where id=$id";
            return $conn->query($upit);
        }
        public static function vratiNakit($id, $conn){
            $upit = "select * from nakit  n inner join kategorija k on k.id_kat=n.kategorija where n.id=$id";
            return $conn->query($upit);
        }
        public static function azurirajNakit($nakit, $conn){
            $upit = "update nakit set naziv='$nakit->naziv',opis='$nakit->opis',cena=$nakit->cena ,kategorija=$nakit->kategorija where id = $nakit->id";
    
            return $conn->query($upit);
        }
  
        

    }












?>