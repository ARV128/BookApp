<?php
    include '../config.php';
    include '../model/Knjiga.php'; 

    
    if ( isset($_POST['naziv']) && isset($_POST['opis']) && isset($_POST['cena'])   ) {
      

        

     

      $knjiga = new Knjiga(null,$_POST['naziv'],$_POST['opis'],$_POST['cena'],$_POST['slika'],$_POST['kategorije']);
  
       
        $status=Knjiga::dodajKnjigu($knjiga,$conn);
        
        
            
            if($status){
                
                echo 'Success';
            }else{
                echo $status;
                echo 'Failed';
            }



      }else{
          echo "Greska";
      }
 




?>