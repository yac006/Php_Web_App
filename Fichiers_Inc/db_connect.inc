<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Function db_connect_func()
{
    $host = "127.0.0.1" ;
    $user = "root" ;
    $password = "" ;
    $database = "npm_db" ;
            
    $GLOBALS['connect'] = @mysqli_connect($host, $user, $password, $database );
    
    if(@mysqli_connect_errno())
    {
        die("Echec connexion a la base de données ".'<br>'. @mysqli_connect_error()) ;
    }
    
}


Function db_close_func()
{
    @mysqli_close($connect);
}




