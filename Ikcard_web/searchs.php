
<?php
  	$bdd = mysqli_connect("localhost", "root","","ikcard");
    if(isset($_POST["query"]))
    {
      $output ='';
      $query = "SELECT name_user FROM particulier WHERE
      name_user LIKE '%".$_POST["query"]."%'
      ";
      $result = mysqli_query($bdd, $query );
      $output = '<ul class="list-unstyled">';
      if ( mysqli_num_rows($result) > 0)
       {
        while ($row=mysqli_fetch_array($result))
        {
          $output .= '<a href="#"><li>Pseudo disponible</li>';
        }
      }
      else {

        $output .= '<li style="color:red">Pseudo non disponible</li>' ;
      }
      $output .= '</ul>';

      echo $output;
    }
