<?php


include ("../Business-layr/PromotionBLL.php");
 $promotionBLL = new PromotionBLL();
 $data = $promotionBLL->AfficherPromotions();
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion promotion</title>
</head>
<body>
    <div>
   <a href="ajouter.php"> Ajouter une promotion</a>
    <table >
     <tr>
        <th>Id</th>
        <th>Nom de promotion</th>
     </tr>
     <?php 
       foreach($data as $value){
    ?>
      <tr>
         <td><?= $value->getId() ?></td>
         <td><?= $value->getNom() ?></td>
      </tr>
     
     <?php }?>
    </table>
    </div>
</body>
</html>