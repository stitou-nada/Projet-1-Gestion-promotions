<?php

function getConnection(){
   
         $Connection = mysqli_connect('localhost', 'root', '', 'gestion_promotion');
           
return $Connection;
     
 }
?>