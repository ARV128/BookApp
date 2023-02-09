

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        
    </style>

</head>
<body style=" background-image: url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v546batch3-mynt-34-badgewatercolor_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=89288ef4b47127f7f34a5998b50e4470');    background-repeat: no-repeat;   background-attachment: fixed;  background-size: cover;">
    


<nav class="navbar navbar-light bg-light justify-content-between">
<a class="navbar-brand" href="dodajNovuKnjigu.php" style="color:black;text-decoration: none;float:left"><strong>Dodaj novu knjigu</strong> </a>
  
  <form class="form-inline">
    
    <input class="form-control mr-sm-2" type="search" id="form1" placeholder="Search" aria-label="Search" onkeyup="pretraga(document.getElementById('form1').value)">
    
    <a class="navbar-brand" href="odjava.php">Odjavi se</a>
  </form>
</nav>


<label for="cena" style="margin-left:20%;font-size:16px">Sortiranje: </label>
            <select name="cena" id="cena" onchange="sortirajPoCeni()" style="background-color:#fbc2eb;color:black;font-size:16px">
                   
                    <option value="ASC">Price ascending  </option>
                    <option value="DESC">Price  descending </option>
        </select>





       

<div id="products">
            <?php
                include 'sveKnjige.php';
            
            ?>
    </div>


    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>


    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

<script>
       
       function sortirajPoCeni() {
            var sortiraj = $("#cena").val();
    

            $("#products").html("");
            $.post("sveKnjige.php", { cena: sortiraj }, function (data) {
                $("#products").html(data);
            });
            $('html, body').animate({
                scrollTop: $("#products").offset().top
            }, 2000);

        


        }



        function pretraga(){
            var input, radios, radio_filter, text_filter, td0, i, divList;

            input = document.getElementById("form1");
            text_filter = input.value.toUpperCase();
            divList = $(".card");
            console.log(divList);

            for (i = 0; i < divList.length; i++) {
                console.log(divList[i]);
                td0 = divList[i].getElementsByTagName("h5")[0].innerHTML;
                console.log(td0);
                if (td0) {
                if (td0.toUpperCase().indexOf(text_filter) > -1) {
                    divList[i].style.display = "";
                } else {
                    divList[i].style.display = "none";
                }
                } 
            }
        }

        </script>







</body>
</html>