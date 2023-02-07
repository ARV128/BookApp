




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            padding: 10px;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
             opacity: 0.7;
        }
        .sav-nakit{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            
            
            margin-left: 9%;
            margin-right:9%;
            margin-top: 10%;
            justify-content: space-between;
        }
        .kategorija {
            height: 25px;
            width: 100px;
            background-color: #9E9DAD;
            border-radius: 10px;
            display: inline-block;
        }
    </style>

</head>
<body style=" background-image: url('https://images.unsplash.com/photo-1519751138087-5bf79df62d5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGpld2VsbGVyeSUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1000&q=80');    background-repeat: no-repeat;   background-attachment: fixed;  background-size: cover;">
    


<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Navbar</a>
  <form class="form-inline">
    <a class="navbar-brand" href="odjava.php">Odjavi se</a>
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" onkeyup="pretraga(document.getElementById('form1').value)">
    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<script>
       
       function sortirajPoCeni() {
            var sortiraj = $("#cena").val();
    

            $("#products").html("");
            $.post("savNakit.php", { cena: sortiraj }, function (data) {
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