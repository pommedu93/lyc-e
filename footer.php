<div  id="modalSupression"class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation de suppresion</h5>
      </div>
      <div class="modal-body">
        <p>Voulez vous supprimer cette nationalité ?</p>
      </div>
      <div class="modal-footer">
        <a href=""class="btn btn-primary" id="btnSuppr">Supprimer</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ne pas supprimer</button>
        
      </div>
    </div>
  </div>
</div>
</main>


<footer class="container">
  <p>&copy; Company 2017-2018</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript"> 

$("a[data-suppression]").click(function(){
    var lien =(this).attr("data-suppression"); // on recup le lien bouton
    var message=(this).attr("data-message"); // on recup le lien bouton
    $("#btnSuppr").attr("href",lien);// on ecrit ce lien sur le bouton "supprimer"
    $(".modal-body").text(message);// on ecrit ce lien sur le bouton "supprimer"


});


</script>

