<?php include "index.php";
include "connexion.php";
$req=$monPdo->prepare("select * from genre");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesgenres=$req->fetchAll();

?>

<main role="main">
    <div class="container"> 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Libellé</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody class="table-group-divider">
    
    <?php 
    foreach($lesgenres as $genre){
        echo "<tr>";
        echo "<td>$genre->num</td>";
        echo "<td>$genre->libelle</td>";
        echo "<td>1</td>";
        echo "</tr>";
        
    }
?>

  </tbody>
</table>



</div>
</main>

<?php include "footer.php";




