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


        public static function vratiSveKnjige($conn){
            $upit = "select * from knjiga  knj inner join kategorija k on k.idKategorije=knj.kategorija";
            return $conn->query($upit);
        }

        public static function vratiSveKnjigeASC($conn){
            $upit = "select * from knjiga  knj inner join kategorija k on k.idKategorije=knj.kategorija order by knj.cena asc ";
            return $conn->query($upit);
        }


        public static function vratiSveKnjigeDESC($conn){
            $upit = "select * from knjiga  knj inner join kategorija k on k.idKategorije=knj.kategorija order by knj.cena desc";
            return $conn->query($upit);
        }
 

        public static function dodajKnjigu($knjiga, $conn){
            $upit = "insert into knjiga(naziv,opis,cena,slika,kategorija) values('$knjiga->naziv','$knjiga->opis',$knjiga->cena,'$knjiga->slika',$knjiga->kategorija)";
            
            return $conn->query($upit);
        }

        public static function obrisiknjigu($id, $conn){
            $upit = " delete from knjige where idKnjige=$id";
            return $conn->query($upit);
        }
        

    }