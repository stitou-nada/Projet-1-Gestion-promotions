<?php
include("../Business_layer/PromotionBLL.php");

if(isset($_GET['id'])){
 
    $promoBLL = new PromotionBLL();
    $id =$_GET['id'];
    $promoBLL->SupprimePromotions($id);

    header('Location: index.php');
}
?>