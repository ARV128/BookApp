<?php
    include 'config.php';  //ovo dodajemo da bismo imali pristup objektu conn
    session_start();
  

	if(isset($_POST["login"])){  //ako je korisnik kliknuo dugme sa name-om login
        //uneti parametri iz forme
        $email = $_POST["email"];
		$lozinka = $_POST["password"];

        //korisnik se uspesno uloguje ukoliko u bazi postoji red tabele koji ima isti email i lozinku kao uneti parametri
        $upit  ="select * from user where email='$email' and password='$lozinka'";
        //izvrsavamo upit
        $rezultat = $conn->query($upit);
       

        if(mysqli_num_rows($rezultat) > 0){ //ako nam se vrati barem jedan red tabele onda znamo da smo u bazi nasli korisnika sa unetim podacima
			
			//ako se korisnik uspesno ulogovao postavicemo superglobalnu promenljivu i poslacemo korisnika na glavnu stranicu
            $_SESSION["prijavljen"] = true;
			header('Location: pocetna.php'); 
		}else{
            
			echo '<script>alert("Wrong credentials")</script>';
		}
    }

 
		 



?>