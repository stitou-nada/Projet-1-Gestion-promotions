<?php
include 'GestionPromotion.php';
 $gestionPromotion = new GestionPromotion();


 if (!empty($_POST)){
    $promotion = new Promotion();
    $promotion->setId($_POST['Id']);
    $promotion->setNom($_POST['name_promotion']);
    $gestionPromotion->Ajouter($promotion);

    // Redirection vers la page index.php
    header("Location : index.php");

 }

?>

<form action="" method="POST">                                                          
Name de promotion : <input type="text" name="name_promotion" >   
<button type="submit">Ajouter</button>
</form>
