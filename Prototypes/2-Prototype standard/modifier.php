<?php
  include ("Business/PromotionBLL.php");


 if(isset($_GET['id'])){
  $promotionBLL = new PromotionBLL();
   $id =$_GET['id'];
   $afficherValue = $promotionBLL->EditPromotions($id);
 }

 if (!empty($_POST)){
    $id=$_POST['Id'];
    $nom=$_POST['name_promotion'];
    $promotionBLL->ModifierPromotions($id,$nom);

    // Redirection vers la page index.php
    header("Location: index.php");

 }

?>

<form action="" method="POST">   
 <input type="hidden" value=<?php echo $afficherValue->getId()?> name="Id" >                                                      
Name de promotion : <input type="text"value=<?php echo $afficherValue->getNom()?> name="name_promotion" >   
<button type="submit">Modifier</button>
</form>
