<?php
include("../Data_access/PromotionDA.php");

class PromotionBLL{

    private $promotionDA= null;
    public function __construct(){
        $this->PromotionDA = new PromotionDA();
   
      
    } 

    public function AfficherPromotions(){
        return $this->PromotionDA->Afficher();
    }
    public function AjouterPromotions(){
        return $this->PromotionDA->Ajouter($promotion);
    }
    public function EditPromotions($id){
        return $this->PromotionDA->Edit($id);
    }
    public function ModifierPromotions($id,$nom){
        return $this->PromotionDA->Modifier($id,$nom);
    }
    public function SupprimePromotions($id){
        return $this->PromotionDA->Supprimer($id);
    }
    
 
}
?>