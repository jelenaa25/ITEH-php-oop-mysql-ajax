<?php
    include 'dbbroker.php';
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
</head>
<body>
    

 <!-- Image and text -->
  <nav class="navbar navbar-custom"  >
    <a class="navbar-brand" href="#">
        <img src="images/diamond.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Zlatara <strong> <i>
            Silver
        </strong></i>
    </a> 
    <div>
        <a class="nav-link" href="pocetna.php" style="color:black;text-decoration: none;float:left"><strong>Pocetna</strong> </a>
        <a   class="nav-link" href="odjava.php" style="color:black;text-decoration: none;float:right">Odjava</a>
    </div>
    </nav>

    <br><br><br>
    <div class="container">

            <form action="" class="sign-in-form" method="post" id= "dodajNoviProizvod" >
                    <h2 class="title">Dodaj novi proizvod</h2>
                    <div class="input-field">
                        <i class="fa fa-diamond"></i>
                        <input type="text" placeholder="Naziv.." name="naziv" id="naziv" required />
                    </div>
                    <div class="input-field">
                        <i class="fa fa-pencil"></i>
                        <input type="text" placeholder="Opis.." name="opis" id="opis" required />
                    </div>
                    <div style="font-size:20px" >
                        <label for="kategorije">Odaberi kategoriju</label>
                        <select name="kategorije" id="kategorije">
                        <?php
                             
                            while($red = $kategorije->fetch_array()): 
                            ?>
                            <option value=<?php echo $red["id_kat"]?>><?php echo $red["naziv_kat"]?></option> 

                            <?php   endwhile;   ?>
                        </select>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-tag"></i>
                        <input type="text" placeholder="Cena.." name="cena" id="cena" required />
                    </div>
                   <br>
                 
                 
                    <br><br><br> 
                    
                    </s>
                <input type="submit"  name="login" id = "login" style="background-color: #ff6fb7;  border-radius: 49px;padding:10px" />
                   
                   <br>
                   
                </form>



    </div>


    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
     
   
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/ajax.js"></script>
</body>
</html>