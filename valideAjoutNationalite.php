<?php 
include "header.php";
include "connexionPDO.php";
$libelle=$_POST['libelle'];//donné du libellé du form

$req=$monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
$req->bindParam(':libelle', $libelle);
$req->execute();
echo'<div class="container mt-5">';

if($nb ==1){
    echo'<div class="alert alert-success" role="alert">
 La nationalité est ajoutée
</div>';
}else{
    echo'<div class="alert alert-danger" role="alert">
 La nationalité est rejetter
</div>';

}
?>
<a href="lyc-e/listenationalites.php" class="btn btn-primary">Revenir à la liste des nationalité</a>

</div>


<?php include "footer.php";

?>
22m30