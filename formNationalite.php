<?php include "header.php";

$action=$_GET['action'];// soit Ajouter ou Modifier
if($action == "Modifier"){
    include "connexionPDO.php";
    $num=$_GET['num'];
    $req=$monPdo->prepare("select * from nationalite where num= :num");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req->bindParam(':num', $num);
    $req->execute();
    $LAnationalite=$req->fetch();
}
?>

<div class="container mt-5">
<h2 class='pt-3 text-center'><<?php echo $action ?> une nationalité</h2>
    <form action="valideformNationalite.php" method="post" class="col-md-6 offset-md-3">
        <div class="form-group">
            <label for='libelle'> libellé </label>
            <input type="text" class='form-control' id='libelle' placeholder='Saisir le libellé' name='libelle'
            value="<?php if($action == "Modifier"){ echo $LAnationalite->libelle ; }?>">

        </div>
        <input type="hidden" id="num" name="num"value="<?php if($action == "Modifier"){ echo $LAnationalite->num;} ?>">
        <div class="row">
            <div class="col"><a href="listenationalites.php" class='btn btn-warning btn-block'>Revenir à la liste</a></div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $action ?> </button></div>
        </div>
    </form>
</div>
<?php include "footer.php";

?>
<-gdffdf->