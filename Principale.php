<?php  
    require('Fichiers_Inc/Verification_données_form.inc'); //+ require('./db_connect.inc');
?>    
   
<?php   db_connect_func();   ?> 



<!--DOCTYPE html>
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="Fichiers_Css/Style_principale.css">
        <title>Principale</title>
    </head>
    
    <body>
        <header>
            <div class="link_cont">
                <a id="link_a" href="Création_compte.php">Créer nouveau compte</a>
            </div>
         
        </header>
        
        

        <div class="main_container">
            
            <div class="foreign_container">
                    <form class="login_form" action="" method="POST">
                       User name: <input type="text" name="user" /><br>
                        Password: <input type="text" name="password"/><br>
                        <input id="btn_submit" type="submit" name="submit" value="Login"/>           
                    </form>
            </div>
            
          <?php   check_func($connect);  //Return 0 or 1... ?> 
          
            
          <?php 
          
                 if(isset($_POST['submit']))
                 { 
            
                     if(check_func($connect) == 0)
                     {
                             echo "User Name  Ou Password Incorrect!!";
                     } 
                     else
                     {       
                             sleep(2);
                             header('location:Compte_utilisateur.php?id_01='.$_POST['user'].'&&id_02='.$_POST['password'].' ');
                     }
                 }
          ?>
 
        </div> 
        
         
        <footer>
            
        </footer>
        
        
           <?php    db_close_func();   ?>
    </body>
</html>
