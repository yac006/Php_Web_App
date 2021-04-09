<?php
   require('db_connect.inc');
   
   db_connect_func();
   
   
   
   function save_data_bdd($connect)   
   {
       if(isset($_POST['submit']))
       {
           $user = $_POST['user'];
           $password = $_POST['password'];
           $nom = $_POST['nom'];
           $prenom = $_POST['prenom'];
           $adress = $_POST['adress'];
           $date_nais = $_POST['date_nais'];
           $tele = $_POST['tele'];
           $email = $_POST['email'];
           
           //**** Image Upload ****//
           if(empty($_FILES["file"]["name"]))
           {
               die(" FILES['img'] is empty ");
           }   
               
           $get_dir = "uploads/";
           $file_name = basename($_FILES["file"]["name"]);
           $file_path = $get_dir . $file_name ;
                                
           $file_type = pathinfo($file_path,PATHINFO_EXTENSION);
              
           if(!move_uploaded_file($_FILES["file"]["tmp_name"] , $file_path))
           {
               die("ERROR Upload Filed !!");
           }
           
           //***** Query *****//          
           $query = "INSERT INTO utilisateurs
                    (user_name,mote_pass,nom,prénom,adress,date_nais,télé,email,file_name)
                    VALUES('". $user ."','". $password ."','". $nom ."','". $prenom ."','". $adress ."','". $date_nais ."','". $tele ."','". $email ."','".$file_name."')";
                             
           $result = mysqli_query($connect, $query);
                          
           if($result)
           {
               echo 'Les données a été enregistrer correctement dans la base de données ...';
           } else 
           {
               die("ERROR !! Les données n'pas enregistrer correctement dans la base de données !!");
           }           
       }
   }

   
 