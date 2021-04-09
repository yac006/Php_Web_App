<?php 
     require('./Fichiers_Inc/db_connect.inc'); 
     
     db_connect_func();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Création_compte</title>
        <link type="text/css" rel="stylesheet" href="Fichiers_Css/Style_compte_utilisateur.css">
    </head>
    <body>
        <div class="main_cont">
            <div class="fryn_cont01">
                <h1 id="h001">Bienvenue <i style="font-size: 40px" ><?php  echo $_GET['id_01']; ?></i> dans votre compte </h1>
            </div>
            
            <div class="fryn_cont02">
                
                <?php // obtenir l'image en bdd
                
                    $user = $_GET['id_01'];
                    
                    $query = "SELECT file_name FROM utilisateurs WHERE user_name='".$user."'";
                    $result = mysqli_query($connect, $query);
                    if(!$result)
                    {
                        die("ERROR QUERY");
                    }
                    
                    $arr = mysqli_fetch_array($result);
                    
                    //print_r($arr);
                    
                    $image_url = 'uploads/'.$arr[0];
                
                ?>
                
                
                <img src="<?php echo $image_url ; ?>"  alt="" >
                
            </div>
            
            <div class="fryn_cont03">
                <?php
                
                     $user = $_GET['id_01'];
                     $password = $_GET['id_02'];
                     
                     $query = "SELECT * FROM utilisateurs 
                                WHERE user_name='".$user."' AND mote_pass='".$password."' ";
                     
                     $result = mysqli_query($connect, $query);
                     
                     if (!$result){
                         die("ERROR IN QUERY !!"); 
                     }
                     
                     $row = mysqli_fetch_assoc($result);
                     
                     //print_r($row);
                ?>  
                <div class="cont_left">
                    
                    <li>Nom : <i><?php echo $row['nom'] ?></i> </li><br>
                      <li>Prénom : <i><?php echo $row['prénom'] ?></i> </li><br>                    
                      <li>Date nais : <i><?php echo $row['date_nais'] ?></i> </li>
                      
                </div>
                
                <div class="cont_right">
                    
                     <li>Adress : <i><?php echo $row['adress'] ?></i> </li><br>
                     <li>Télé : <i><?php echo $row['télé'] ?></i> </li><br>
                     <li>Email : <i><?php echo $row['email'] ?></i> </li> 
                    
                </div>
            
                 <?php  mysqli_free_result($result);  ?>
            </div>
        </div>
        
        
        <?Php   db_close_func()   ?>
    </body>
</html>
