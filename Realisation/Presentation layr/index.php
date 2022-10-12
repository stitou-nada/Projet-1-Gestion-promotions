<?php


include ("../Business/PromotionBLL.php");
 $PromotionBLL = new PromotionBLL;
 $data = $PromotionBLL->AfficherPromotions();
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">
  
              <h4 class="text-center my-3 pb-3">GESTION PROMOTION</h4>
              <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" method="POST">
                  <div class="col-12">
                   
                     <a href="ajouter.php"class="btn btn-primary" style="color:white">Ajouter Promotion </a>
                  
                  </div>
                <div class="col-12">
                  <div class="form-outline">
                    <input type="text" id="live_search" class="form-control" placeholder="Recherche" />
                  </div>
                </div>
              </form>
  
              <table class="table mb-4">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom Promotion</th>
                    <th scope="col">Actions</th>
                  </tr>
                  
                </thead>
                <tbody id="searchresult">
                    <?php 
                       foreach($data as $value){
                     ?>
                  <tr>
                    <td scope="row"><?= $value->getId() ?></td>
                    <td><?= $value->getNom() ?></td>
                    
                    <td>
                      <a href="modifier.php?id=<?php echo $value->getId() ?>" class="btn btn-success ms-1">Modifier</a>
                    <a href="supprimer.php?id=<?php echo $value->getId() ?>"class="btn btn-danger">Supprime</a>
                    </td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
              <script src="search.js"></script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
  </body>
</html>
