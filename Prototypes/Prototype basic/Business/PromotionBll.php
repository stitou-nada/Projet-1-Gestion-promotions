<?php
include("Data_access/PromotionDA.php");

class PromotionBLL{
    
    public function __construct(){
        $PromotionDA = new PromotionDA();
   
      
    } 

    public function AfficherPromotions(){
        return $this->promotionDA->Afficher();
    }
    public function AjouterPromotions(){
        return $this->promotionDA->Ajouter($promotion);
    }
}
?>