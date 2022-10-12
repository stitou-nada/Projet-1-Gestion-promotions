<?php
include ('../Data_access/connection.php');
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $query = "SELECT * FROM promotion WHERE name_promotion LIKE '{$input}%'";
    $result = mysqli_query(getConnection() ,$query);
    if(mysqli_num_rows($result)>0){?>

   
         
            <?php 
            while($row = mysqli_fetch_assoc($result)){
                $id =$row['Id'];
                $nom =$row['name_promotion'];
                ?>
               
                 <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $nom;?></td>
                <td>
                    <a href="modifier.php?id=<?php echo $id?>" class="btn btn-success ms-1">Modifier</a>
                    <a href="supprimer.php?id=<?php echo $id ?>"class="btn btn-danger">Supprime</a>
         </td>
            </tr>
            <?php
            }
            ?> 
           
    <?php

        }
}
?>