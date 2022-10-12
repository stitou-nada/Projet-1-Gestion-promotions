<?php
include("Data_access/PromotionDA.php");

class PromotionBLL{
    
    private $promotionDA= null ;
    
    public function __construct(){
        
       $this->promotionDA = new PromotionDA();
   
      
    } 

    public function AfficherPromotions(){
        return $this->promotionDA->Afficher();
    }
    public function AjouterPromotions(){
        return $this->promotionDA->Ajouter($promotion);
    }
}
?>