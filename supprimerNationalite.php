<?php 
include "header.php";
include "connexionPDO.php";
$action=$_GET['num'];

$req=$monPdo->prepare("delete nationalite where num =:num");
$req->bindParam(':num', $num);
$nb=$req->execute();

if($nb ==1){
    $_SESSION['message']=["success"=>"La nationalité a bien été suprimée"];
}else{
    $_SESSION['message']=["success"=>"La nationalité n'a pas été suprimée"];
}
header('location :listenationalites.php :');
exit();

?>

