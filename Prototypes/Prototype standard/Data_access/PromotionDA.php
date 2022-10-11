<?php


include 'promotion.php';
include 'connection.php';
class PromotionDA{

     public function Afficher(){
         $selectRow = 'SELECT * FROM promotion';
         $query = mysqli_query(getConnection() ,$selectRow);
         $promotion_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

         $TableData = array();
          foreach ($promotion_data as $value_data) {
           $promotion = new Promotion;
           $promotion->setId($value_data['Id']);
           $promotion->setNom($value_data['name_promotion']);
           array_push($TableData , $promotion);
          }
          return $TableData;

     } 

     public function Ajouter($promotion)  {
        $nom = $promotion->getNom();

        //requet sql
     $insertRow = "INSERT INTO promotion(name_promotion)
                   VALUES('$nom')";
     mysqli_query(getConnection(), $insertRow);
     }
}
?>