<?php
  include ("../Business/PromotionBLL.php");


 if(isset($_GET['id'])){
  $promotionBLL = new PromotionBLL();
   $id =$_GET['id'];
   $afficherValue = $promotionBLL->EditPromotions($id);
 }

 if (!empty($_POST)){
    $id=$_POST['Id_input'];
    $nom=$_POST['nameInput'];
    $promotionBLL->ModifierPromotions($id,$nom);

    // Redirection vers la page index.php
    header("Location: index.php");

 }

?>
<!DOCTYPE html>
<html lang="en">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
  <body>
<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">
  
              <h4 class="text-center my-3 pb-3">MODIFIER PROMOTION</h4>
              <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" method="POST">
                 
                <div class="col-12">
                  <div class="form-outline">
                  <input type="hidden" value=<?php echo $afficherValue->getId()?> name="Id_input" >    
                    <input type="text"value="<?php echo $afficherValue->getNom()?>" class="form-control" name="nameInput" placeholder="Insere promotion" />
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
  </body>
</html>