<?php 
include "header.php";
include "connexionPDO.php";
$action=$_GET['action'];
$num=$_POST['num'];//données du num recup sur form
$libelle=$_POST['libelle'];//données du libellé recup sur form

if($action == "Modifier"){
    $req=$monPdo->prepare("update nationalite set values libelle= :libelle where num =:num");
    $req->bindParam(':num', $num);
    $req->bindParam(':libelle', $libelle);
    
}else{
    $req=$monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
    $req->bindParam(':libelle', $libelle);
    
}
$nb=$req->execute();
$message=$action == "Modifier"? "modifiée": "ajoutée";


echo'<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-5">';
if($nb ==1){
    echo'<div class="alert alert-success" role="alert">
 La nationalité est '.$message. '</div>';

}else{
    echo'<div class="alert alert-danger" role="alert">
 La nationalité n\'a pas été '.$message. '</div>';


}
?>
<a href="listenationalites.php" class="btn btn-primary">Revenir à la liste des nationalité</a>

</div>


<?php include "footer.php";

?>
