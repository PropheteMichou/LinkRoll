<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Projet LinkRoll</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>


<?php
echo '<hr><h1><center>' . "LINKROLL" . '</h1></center>';

//Site Random

        $data = file("liens.txt");

        $nbLine = count($data);

        $categories = array();


        echo '<hr><h1><center>' . "Site Au Hasard" . '</h1></center>';


   $id = array_rand($data);
   $id2 = array_rand($data);

   // affiche la ligne
   while($id==$id2)
   {
    $id2 = array_rand($fichier);
   }
   $values = explode(',',$data[$id]);
   $values2 = explode(',',$data[$id2]);


echo ' <div class="row">';
  echo '<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
     <img src="//www.apercite.fr/api/apercite/240x180/yes/'.$values[0].'" alt="Miniature par Apercite.fr" width="240" height="180" />
      <div class="caption">
        <h4><center>'.$values[0].'</center></h4>
        <p><a href="http://' . $values[0] . '" class="btn btn-primary btn-lg btn-block" role="button">Visiter le site</a></p>
      </div>
    </div>
  </div>';


  echo' <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
     <img src="//www.apercite.fr/api/apercite/240x180/yes/'.$values2[0].'" alt="Miniature par Apercite.fr" width="240" height="180" />
      <div class="caption">
        <h4><center>'.$values2[0].'</center></h4>
        <p><a href="http://' . $values2[0] . '" class="btn btn-primary btn-lg btn-block" role="button">Visiter le site</a></p>
      </div>
    </div>
  </div>';

echo '</div>';

echo '<hr><h1><center>' . "Catégorie" . '</h1></center>';

// enregistrer les catégories

        for ($i = 0; $i < $nbLine; $i++) {
          $values = explode(',', $data[$i]);
          $cat = $values[1];
          if (!in_array($cat, $categories)) {
            $categories[] = $cat;
          }
        }



// Trie alphabétique
        sort($categories);
        sort($data);
// Afficher les cartes en fonction des catégories
        $n = 0;
        $b = false;
        foreach ($categories as $cat) {
          if ($n != 0 && !$b) {
            echo '</div>';
          }
          echo '<h1 style="text-align:center;">' . $cat . '</h1><hr>';
          $o = 0;
          for ($i = 0; $i < $nbLine; $i++) {
            $values = explode(',', $data[$i]);
            if ($cat == $values[1]) {
              $b = false;
              if ($o == 0) {
                echo '<div class="row">';
              }
              echo '<div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <img src="http://www.apercite.fr/api/apercite/240x180/oui/http://' . $values[0] . '/" alt="...">
                        <div class="caption">
                          <h4 style="text-align:center;">' . $values[0] . '</h4>
                          <p><a href="http://' . $values[0] . '" class="btn btn-primary btn-lg btn-block" role="button">Visiter le site</a></p>
                        </div>
                      </div>
                    </div>';
              $o++;
              if ($o == 3) {
                echo '</div>';
                $b = true;
                $o = 0;
              }
            }
          }
          $n++;
        }

      ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
