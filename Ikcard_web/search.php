
<?php
  	$bdd = mysqli_connect("localhost", "root","","ikcard");
    if(isset($_POST["query"]))
    {
      $output ='';
      $query = "SELECT * FROM particulier WHERE name_all LIKE '%".$_POST["query"]."%'
      || name_user LIKE '%".$_POST["query"]."%'
      || email LIKE '%".$_POST["query"]."%'
      || numero LIKE '%".$_POST["query"]."%'
      || poste_occupe LIKE '%".$_POST["query"]."%'
      || profession LIKE '%".$_POST["query"]."%'
      || adresse LIKE '%".$_POST["query"]."%'
      || compagnie LIKE '%".$_POST["query"]."%'
      || site_web LIKE '%".$_POST["query"]."%'
      || name_all LIKE '%".$_POST["query"]."%'
      ";
      $result = mysqli_query($bdd, $query );
      $output = '<ul class="list-unstyled">';
      if ( mysqli_num_rows($result) > 0)
       {
        while ($row=mysqli_fetch_array($result))
        {
          $output .= '<a href="page-profile-particulier.php?id='.$row['id'].'"><li>'.$row["name_all"].'</li>';
        }
      }
      else {

        $output .= '<li style="color:red">Pas de correspondance</li>' ;
      }
      $output .= '</ul>';

      echo $output;
    }
