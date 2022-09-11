<?php

    class Nakit{
        private $id;
        private $naziv;
        private $opis;
        private $cena; 
        private $kategorija;


        public function __construct($id=null,$naziv=null,$opis=null,$cena=null,$kategorija=null)
        {
            $this->idNakita=$id;
            $this->naziv=$naziv;
            $this->opis=$opis;
            $this->cena=$cena; 
            $this->kategorija=$kategorija;


        }


  
        

    }












?>