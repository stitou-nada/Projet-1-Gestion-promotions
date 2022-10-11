<?php


include 'promotion.php';
class GestionPromotion{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'gestion_promotion');
           
         
       
        
        return $this->Connection;
        
    }
   

     public function Afficher(){
         $selectRow = 'SELECT * FROM promotion';
         $query = mysqli_query($this->getConnection() ,$selectRow);
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
     $insertRow = "INSERT INTO promotion(name_promotion)VALUE('$nom')";
     mysqli_query($this->getConnection(), $insertRow);
     }
}
?>