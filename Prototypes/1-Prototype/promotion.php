<?php

class Promotion{
    private $Id ;
    private $Nom;


      public function getId(){
        return $this->$Id;
      }
      public function setId($id){
        $this->Id = $id;
      }
      public function getNom(){
        return $this->$Nom;
      }
      public function setNom($nom){
        $this->Nom = $nom;
      }

} 

?>