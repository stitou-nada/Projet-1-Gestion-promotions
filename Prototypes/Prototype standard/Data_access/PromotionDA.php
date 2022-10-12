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


    public function Edit($id){
     $selectRowId = "SELECT * FROM promotion WHERE id =$id";
     $query = mysqli_query(getConnection(),$selectRowId);
     $promotion_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
     foreach($promotion_data as $value){
     $promotion= new promotion();
     $promotion->setId($value['Id']);
     $promotion->setNom($value['name_promotion']);
   }
       return $promotion;

    } 

    public function Modifier($id,$nom){
      $RowUpdate = "UPDATE promotion SET
      name_promotion='$nom' WHERE id=$id ";
      mysqli_query(getConnection(),$RowUpdate);
    }
}
?>