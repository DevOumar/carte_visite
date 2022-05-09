<?php include('link_css.php'); ?>
     <div class="modal fade" id="logins">
        <div class="modal-dialog">
           <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                 <h4 class="modal-title">Modal Heading</h4>
                 <a href="index.php"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
              </div>
              <div class="modal-body">
                <div class="alert alert-danger" style="text-align:center">
                  Email ou Mot de passe erronés ! Réessayez
                </div>
                <form class="form-control" action="login.php" method="post">
                  <div class="form-group has-feedback">
                    <input type="email" class="form-control sty1" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control sty1" name="pass" placeholder="Mot de passe" required>
                  </div>
                    <div class="col-xs-4 m-t-1">
                      <input type="submit" class="btn btn-primary btn-block" value="Connection">
                  </div>
                </form>
                <div data-toggle="modal" data-target="#recuperation" class="m-t-2">Mot de passe oublié? <a href="index.php?login=dweeeffff4999JJkjhkjh776J99JJ99889JJJJ8888ybghghdhf76575dtt" class="text-center">Reinitialisé mot de passe !</a></div>
                <div data-toggle="modal" data-target="#inscription" class="m-t-2">Vous n'avez pas de compte ? <a href="index.php?login=dweeeffff4999JJkjhkjh776J9yuyut559JJ99889JJJJ8888ybghghdhf76575dtt" class="text-center">Inscrivez Vous</a></div>
              </div>
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
