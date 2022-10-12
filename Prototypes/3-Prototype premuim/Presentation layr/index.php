<?php


include ("../Business/PromotionBLL.php");
 $PromotionBLL = new PromotionBLL;
 $data = $PromotionBLL->AfficherPromotions();
 

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
    <div class="container" style="max-width: 50%;">
    <div class="text-center mt-5 mb-4">
         <h2>GESTION PROMORION</h2>
         <a href="ajouter.php"> Ajouter une promotion</a>
    </div>
    
    <input type="text" class="form-control" id="live_search" autocomplete="off"
    placeholder="Search...
    "></input>

   
    <table >
     <tr>
        <th>Id</th>
        <th>Nom de promotion</th>
     </tr>
     <tbody id="searchresult">
     <?php 
       foreach($data as $value){
    ?>
      <tr>
         <td><?= $value->getId() ?></td>
         <td><?= $value->getNom() ?></td>
         <td>
                    <a href="modifier.php?id=<?php echo $value->getId() ?>">Modifier</a>
                    <a href="supprimer.php?id=<?php echo $value->getId() ?>">Supprime</a>
         </td>
      </tr>
      
      <?php }?>
   </tbody> 
    </table>
    </div>
    <div id=""></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="search.js"></script>
    
</body>
</html>