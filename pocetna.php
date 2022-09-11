<?php
    include 'dbbroker.php';  
    include 'model/Nakit.php';  
    include 'model/Kategorija.php';
    //da bismo mogli da prikazemo sav nakit u tabeli moramo da prvo procitamo sve podatke o svom nakitu iz baze
    $savNakit = Nakit::vratiSavnakit($conn); //rezultat ovog upita cemo prikazati u tabeli dole
  
    $kategorije = Kategorija::vratiSveKategorije($conn); //potrebno da bismo mogli da ucitamo sve kategorije u modalu za izmenu 
     

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <a class="nav-link" href="dodajnovinakit.php" style="color:black;text-decoration: none;float:left"><strong>Dodaj novi nakit</strong> </a>

        <a   class="nav-link" href="odjava.php" style="color:black;text-decoration: none;float:right">Odjava</a>
    </div>
    </nav>
<table class="table table-hover">
  <thead>
    <tr>
        <th >ID</th>
        <th>NAZIV</th>
        <th>OPIS</th>
        <th>CENA</th>
        <th>KATEGORIJA</th>
        <th>OPCIJE</th>
    </tr>
  </thead>
  <tbody>

            <?php  while($red = $savNakit->fetch_array()):     ?>

                    <tr>
                        <th  >   <?php   echo $red['id'];        ?>     </th>
                        <td> <?php   echo $red['naziv'];        ?> </td>
                        <td style="max-width: 200px;"> <?php   echo $red['opis'];        ?> </td>
                        <td>  <?php   echo $red['cena'];        ?> </td>
                       
                        <td style="text-align:center">  <?php   echo $red['naziv_kat'];        ?> </td>
                        <td>   

                        <form  method="post">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal" onclick="azurirajNakit(<?php echo   $red['id'];?>)" >    <i class="fas fa-pencil-alt"></i> </button> 
                            <button type="button" class="btn btn-danger"   onclick="obrisinakit(<?php echo   $red['id'];?>)"> <i class="fas fa-trash"></i> </button>  
                           
                        </form>
                        </td>
                    

                    </tr>
                    

            <?php endwhile;?>
 
 
  </tbody>
</table>






<!-- edit form modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Izmena nakita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     


      <form   class="sign-in-form" id="editform" name="editform" method="POST" enctype="multipart/form-data" >
        <div class="modal-body">
           
      

        
         
        <div class="input-field">
            <i class="fa fa-diamond"></i>
            <input type="text" placeholder="Naziv.." name="nazivEdit" id="nazivEdit" required />
        </div>
        <div class="input-field">
            <i class="fa fa-pencil"></i>
            <input type="text" placeholder="Opis.." name="opisEdit" id="opisEdit" required />
        </div>
        <div style="font-size:20px" >
            <label for="kategorijeEdit">Odaberi kategoriju</label>
            <select name="kategorijeEdit" id="kategorijeEdit">
            <?php    while($red = $kategorije->fetch_array()):            ?>
                  <option value=<?php echo $red["id_kat"]?>><?php echo $red["naziv_kat"]?></option> 

                <?php   endwhile;   ?>
            </select>
        </div>
        <div class="input-field">
            <i class="fas fa-tag"></i>
            <input type="text" placeholder="Cena.." name="cenaEdit" id="cenaEdit" required />
        </div>
       <br>
     
        <div style="font-size:20px;margin:0px"> 
       
            <!-- Dodajemo ovde jedno skriveno polje da bismo sacuvali id nakita koji azuriramo da bismo kasnije taj id mogli da koristimo u edit.php -->
            <input type="text" name="sakrivenoPoljeID" id="sakrivenoPoljeID" readonly>
 
 
        </div> 

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="editButton" >Submit</button> 
        </div>
 

      </form>
    </div>
  </div>
</div>
<!-- edit form modal end -->


















<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


                <script src="js/ajax.js"></script>
</body>
</html>