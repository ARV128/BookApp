
<?php
    include 'config.php';
    include 'model/Kategorija.php';
    
    $kategorije = Kategorija::vratiSveKategorije($conn); //uzimamo sve kategorije da bismo mogli da ih prikazemo u comboboxu da korisnik moze da odabere, inace korisnik nema pojma koje kategorije mi imamo


 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj novi nakit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        
        /* Modify the background color navbara */
         
        .navbar-custom {
            background-color:  #ff6fb7;
        }
        /* Modify brand and text color navbara */
         
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: Black;
        }

    </style>


<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    


    <nav class="navbar navbar-light bg-light justify-content-between">
           
           <a class="navbar-brand" href="dodajNovuKnjigu.php" style="color:black;text-decoration: none;float:left"><strong>Dodaj novu knjigu</strong> </a>

           <form class="form-inline">
              
            
               <a class="navbar-brand" href="odjava.php">Odjavi se</a>
           </form>
       </nav>
 

        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/knjiga.jpg');">
                <div class="wrap-login100 p-t-30 p-b-50">
                    <span class="login100-form-title p-b-41">
                       Dodaj novu knjigu
                    </span>
                    <form class="login100-form validate-form p-b-33 p-t-5" method="post" id="dodajNoviProizvod">

                        <div class="wrap-input100 validate-input"  >
                            <input class="input100" type="text" name="naziv" placeholder="Naziv">
                            
                        </div>

                        <div class="wrap-input100 validate-input"  >
                            <input class="input100" type="text" name="opis" placeholder="Opis">
                            
                        </div>

                        
                        <div class="wrap-input100 validate-input"  >
                            <input class="input100" type="text" name="cena" placeholder="Cena">
                            
                        </div>

                        
                        <div class="wrap-input100 validate-input"  >
                            <input class="input100" type="text" name="slika" placeholder="Slika">
                             
                        </div>

                        <div style="font-size:20px;margin:40px;" >
                            <label for="kategorije">Odaberi kategoriju</label>
                            <select name="kategorije" id="kategorije">
                            <?php
                                
                                while($red = $kategorije->fetch_array()): 
                                ?>
                                <option value=<?php echo $red["idKategorije"]?>><?php echo $red["nazivKategorije"]?></option> 

                                <?php   endwhile;   ?>
                            </select>
                        </div>
 

                        <div class="container-login100-form-btn m-t-32">
                            <button class="login100-form-btn" name="dodaj">
                                Dodaj
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>



        
            


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
     
   
    <div id="dropDownSelect1"></div>
	
    <!--===============================================================================================-->
     
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
     
    <!--===============================================================================================-->
        
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
         
       
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script src="js/main.js"></script>
    

       <script>



$('#dodajNoviProizvod').submit(function () {

var form = $('#dodajNoviProizvod')[0];
console.log(form);
var formData = new FormData(form);
event.preventDefault();  
console.log(formData);

request = $.ajax({  
    url: 'handler/add.php',  
    type: 'post', 
    processData: false,
    contentType: false,
    data: formData
});
console.log(request);
request.done(function (response, textStatus, jqXHR) {
    console.log(textStatus);
    console.log(jqXHR);
console.log(response);

    if (response === "Success") {
        alert("Uspesno dodato");
        
        header('Location: pocetna.php'); 
    }
    else {

        console.log("Neuspesno" + response);
    }
});

request.fail(function (jqXHR, textStatus, errorThrown) {
    console.error('Greska: ' + textStatus, errorThrown);
});
}); 


       </script>

       
</body>
</html>