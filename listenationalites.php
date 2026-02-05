<?php 
include "header.php";
include "connexionPDO.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesnationalites=$req->fetchALL();
?>

<main role="main">
<div class="container">

<table class="table table-success table-striped">
  <thead>
    <tr>
      
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
 <?php foreach($lesnationalites as $nationalite)
  echo "<tr>";
  echo"<td>$nationalite->num</td>";
  echo"<td>$nationalite->libelle</td>";
  echo"<td></td>";

  echo"</tr>";

?>
  </table>

</div>
</main>

<?php include "footer.php";

?>