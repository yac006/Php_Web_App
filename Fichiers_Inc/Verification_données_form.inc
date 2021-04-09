<?php
 require('db_connect.inc');



 function check_func($connect)
 {
     
    if(isset($_POST['submit']))
    {
        $user = $_POST['user'];
        $password = $_POST['password'];
        
        $query = "SELECT * FROM utilisateurs WHERE user_name='".$user."' AND  mote_pass= '".$password."'";
        
        $result = @mysqli_query($connect , $query);
        
        if($result)
        {
            
            $row_count = @mysqli_num_rows($result);
            
            return $row_count;

        }
        else
        {
           die("ERROR Query !!!");
        }
       
    }
          
 }
 
 


     
