<?php

    class Knjiga{
        private $idKnjige;
        private $naziv;
        private $opis;
        private $cena;
        private $slika;
        private $kategorija;


        public function __construct($id=null,$naziv=null,$opis=null,$cena=null,$slika=null,$kategorija=null)
        {
            $this->idKnjige=$id;
            $this->naziv=$naziv;
            $this->opis=$opis;
            $this->cena=$cena;
            $this->slika=$slika;
            $this->kategorija=$kategorija;


        }    
    }