<?php include('link_css.php'); ?>
     <div class="modal fade" id="logins">
       <div class="modal-dialog">
          <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
                <h4 class="modal-title">inscription</h4>
                <a href="index.php"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
               <form action="save_step1.php" method="post">
                 <div class="form-group has-feedback">
                   <input type="text" class="form-control sty1" name="nom" placeholder="Nom" required>
                 </div>
                 <div class="form-group has-feedback">
                   <input type="text" class="form-control sty1" name="prenom" placeholder="Prenom" required>
                 </div>
                 <div class="form-group has-feedback">
                   <input type="email" class="form-control sty1" name="email" placeholder="Email" required>
                 </div>
                 <div class="form-group has-feedback">
                   <input type="password" class="form-control sty1" name="pass" placeholder="Mot de passe" required>
                 </div>
                   <div class="col-xs-4 m-t-1">
                     <input type="submit" class="btn btn-primary btn-block" value="Inscription">
                 </div>
               </form>
             </div>
             <!-- Modal footer -->
             <div class="modal-footer">
               <a href="index.php"><button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button></a>
             </div>
          </div>
       </div>
     </div>
  </body>
    <?php include('link_js.php'); ?>
  <script>
    $(document).ready(function(){
      $('#logins').modal('show');
    });
    function hideF() {
    $('.modal').hide();
}
  </script>
