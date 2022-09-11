<?php
    include 'dbbroker.php';  
    include 'model/Nakit.php';  
   
    //da bismo mogli da prikazemo sav nakit u tabeli moramo da prvo procitamo sve podatke o svom nakitu iz baze
    $savNakit = Nakit::vratiSavnakit($conn); //rezultat ovog upita cemo prikazati u tabeli dole
  
     

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
    
</head>
<body>
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
                            <button type="button" class="btn btn-success"   >    <i class="fas fa-pencil-alt"></i> </button> 
                            <button type="button" class="btn btn-danger"   onclick="obrisinakit(<?php echo   $red['id'];?>)"> <i class="fas fa-trash"></i> </button>  
                           
                        </form>
                        </td>
                    

                    </tr>
                    

            <?php endwhile;?>
 
 
  </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


                <script src="js/ajax.js"></script>
</body>
</html>