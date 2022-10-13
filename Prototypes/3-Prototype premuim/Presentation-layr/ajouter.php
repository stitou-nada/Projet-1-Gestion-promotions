<?php
  include ("../Business-layr/PromotionBLL.php");
 $gestionPromotions = new PromotionDA();


 if (!empty($_POST)){
    $promotion = new Promotion();
    $promotion->setNom($_POST['name_promotion']);
    $gestionPromotions->Ajouter($promotion);

    // Redirection vers la page index.php
    header("Location: index.php");

 }

?>

<form action="" method="POST">                                                          
Name de promotion : <input type="text" name="name_promotion" >   
<button type="submit">Ajouter</button>
</form>
