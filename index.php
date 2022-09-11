<?php

    include 'loginregister.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css" />
    <title>Dobro došli!</title>
 
</head>
<body>

<div class="container">
    
    <div class="forms-container">
    
        <div class="signin-signup"  ;>

            <!-- sign in form -->
            <form action="" class="sign-in-form" method="post"  >
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" name="email" id="email"  required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Lozinka" name="lozinka"  id="lozinka"  required />
                </div>
          
            <input type="submit" value="Login" name="login" id = "login" class="btn solid"  />
               
               <br>
               
            </form>


            <!-- sign up form -->
            <form action="" class="sign-up-form" method="post">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i> 
                    <input type="text" placeholder="Ime i prezime" name="signup_imePrezime"  required />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="signup_email" id="signup_email"      required />
                </div>
               
                <div class=" input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Lozinka" name="signup_lozinka"  required />
                </div>
                <div class=" input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Potvrdite lozinku" name="signup_confirm_lozinka" required />
                </div>
                <input type="submit" class="btn solid" name="register"  id="register" value="Sign up" />
                

            </form>
        </div>
    </div>

    <div class="panels-container">            
        <div class="panel left-panel">
        
            <div class="content">
               
                <h3 style="color: #444">Novi ste ovde?</h3>
                <br>
                
                <button class="btn transparent" id="sign-up-btn" style="color: #ff6fb7; border: solid #fff" >
                    Sign up
                </button>
            </div>
           
            

        </div>
        <div class="panel right-panel">
            <div class="content">
              
                <h3 style="color: #444">Već ste nas posetili?</h3>
                <br>
                <button class="btn transparent" id="sign-in-btn" style="color: #ff6fb7; border: solid #fff">
                    Sign in
                </button>
            </div>
            <img src="  " class="image" alt="" />
        </div>
    </div>


</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
</body>
</html>