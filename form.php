<?php include "header.php";
?>
<div class="container mt-5">

<form action="valideAjoutlistegenre.php" method="post">
<div class="form-group">
    <label for='libelle'> libellé </label>
    <input type="text" class='form-control' id='libelle' placeholder='Saisir le libellé' name='libelle'>
</div>
<div class="row">
    <div class="col"><a href="listenationalites.php" class='btn btn-warning'>Revenir à la liste</a></div>
    <div class="col"><button type='submit' class='btn btn-success'>Ajouter</button></div>
</div>
</form>
</div>