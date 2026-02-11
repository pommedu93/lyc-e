<?php 
include "header.php";
include "connexionPDO.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesnationalites=$req->fetchALL();
?>


<div class="container mt-5">
  <div class="col-9"><h2>Liste des nationalités</h2>
  <div class="clo-3"><a href="" class='btn btn-sucess'><i class="fas fa-plus-circle"></i>Créer une nationalité</a>
  <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Numéro</th>
      <th scope="col">Libellé</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
 
  </tbody>
 <?php foreach($lesnationalites as $nationalite){
  echo "<tr>";
  echo"<td>$nationalite->num</th>";
  echo"<td>$nationalite->libelle</th>";
  echo"<td>
      <a href='' class='btn btn-primary'><i class='fas fa-plus-circle'></i>Créer une nationalité</a>
  </td>";
  echo"</tr>";
}
?>
  </table>

</div>
</main>

<?php include "footer.php";

?>