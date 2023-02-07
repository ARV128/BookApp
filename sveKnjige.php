
<?php
    include 'config.php';
    include 'model/Knjiga.php';
    
    $sveKnjige=Knjiga::vratiSveKnjige($conn);




    if (isset($_POST['cena'])) {
      $sortiraj = $_POST['cena'];
      if($sortiraj=='ASC'){
          $sveKnjige = Knjiga::vratiSveKnjigeASC($conn);
      }
      else{
          $sveKnjige = Knjiga::vratiSveKnjigeDESC($conn);
      }


  }else{
      $sveKnjige = Knjiga::vratiSveKnjige($conn);
  }


    ?>




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
<body>
    


< <div class="sve-knjige">

<?php   while($red = $sveKnjige->fetch_array()):  ?>
    <div class="card">
        <img src=<?php echo $red["slika"]?>  style="width:100%">
        <h5> <?php echo $red["naziv"]?>  </h5>
        <span class="kategorija"> <?php echo $red["nazivKategorije"]?></span>
        <p class="price"> <?php echo $red["cena"]?></p>
        <p>  <?php echo $red["opis"]?></p>
        <button type="button" class="btn btn-danger"    ><i class="fas fa-trash" onclick="obrisiknjigu(<?php echo   $red['idKnjige'];?>)"></i></button>  
         
    </div>

<?php endwhile;?>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

        function obrisiknjigu(deleteid){


        request = $.ajax({  
            url: 'handler/delete.php',  
            type: 'post', 
            data: {deleteid:deleteid},


            success: function(data, status){
                location.reload(true);
                alert("Uspesno obrisano!");
            }


        });



        }


    </script>



</body>
</html>