<?php
  include ("../Business/PromotionBLL.php");
 $PromotionsBLL = new PromotionBLL();


 if (!empty($_POST)){
    $promotion = new Promotion();
    $promotion->setNom($_POST['name_promotion']);
    $PromotionsBLL->AfficherPromotions($promotion);

    // Redirection vers la page index.php
    header("Location: index.php");

 }

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
  
              <h4 class="text-center my-3 pb-3">AJOUTER PROMOTION</h4>
              <form action="" method="POST" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" >
              <div class="col-12">                 
                      <h5>Name :<h5>               
               </div>
                <div class="col-12">
                  <div class="form-outline">
                   <input type="text" class="form-control" name="name_promotion" placeholder="Insere " />
                  </div>
                </div>
                <div class="col-12">
                 
                  <button class="btn btn-primary" style="color:white">Ajouter </button>
               
               </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
  