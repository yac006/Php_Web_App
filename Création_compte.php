<?php
   require('Fichiers_Inc/Enregistrer_données_en_bdd.inc');
?>

<!--DOCTYPE html-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="Fichiers_Css/Style_création_compte.css">
        <title></title>
    </head>
    
    <body>
        
        <div class="prcp_cntr">
            
            
            <div class="cntr_01">
            
                <h1>Création compte</h1>
            </div>
            
            
            
            <div class="cntr_02">
            
                <form class="cntr_form" action="" method="POST" enctype="multipart/form-data" >
                    User name: <input type="text" name="user">
                    Mote de pass: <input type="text" name="password">
                    Nom: <input type="text" name="nom"> 
                    Prénom: <input type="text" name="prenom"><br>
                    Adress: <input type="text" name="adress">
                    Date nais: <input type="text" name="date_nais">
                    Télé: <input type="text" name="tele">
                    Email: <input type="text" name="email"><br><br>
                    <input style="border: dotted 1px" type="file" name="file">
                    
                    <input style="margin-left:40px" type="submit" name="submit" value="Save">
                </form>
                
                
                
                <?php   save_data_bdd($connect);  ?>
                                  
              
                
                
            </div>
        </div>
        
        
        
        <?php   db_close_func();    ?>
    </body>
</html>