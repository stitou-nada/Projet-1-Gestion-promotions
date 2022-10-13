<?php
include("../Data-access-layr/PromotionDA.php");

class PromotionBLL{
    
    private $promotionDA= null ;
    
    public function __construct(){
        
       $this->promotionDA = new PromotionDA();
   
      
    } 

    public function AfficherPromotions(){
        return $this->promotionDA->Afficher();
    }
    public function AjouterPromotions($promotion){
        return $this->promotionDA->Ajouter($promotion);
    }
}
?>