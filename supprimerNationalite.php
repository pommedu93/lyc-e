<?php 
include "header.php";
include "connexionPDO.php";
$action=$_GET['num'];

$req=$monPdo->prepare("delete nationalite where num =:num");
$req->bindParam(':num', $num);
$nb=$req->execute();

echo'<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-5">';
if($nb ==1){
    echo'<div class="alert alert-success" role="alert">
    La nationalité a bien été suprimée </div>';

}else{
    echo'<div class="alert alert-danger" role="alert">
    petit problème : La nationalité n\'a pas été suprimée </div>';


}
?>
<a href="lyc-e/listenationalites.php" class="btn btn-primary">Revenir à la liste des nationalité</a>

</div>


<?php include "footer.php";

?>
