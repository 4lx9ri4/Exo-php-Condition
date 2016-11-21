<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exos Php Conditions</title>
  </head>
  <body>
      <?php
      //Exo1
          $age = 27;
          if($age>=18){
            $rep = "Vous êtes majeur";
          }
          elseif($age<=18){
            $rep = "Vous êtes mineur";
          }
          echo $rep;

echo "<br/>";

      //Exo2
          $IsEasy = True;
          if ($IsEasy = True) {
            echo "C'est Facile !!";
          }
          else
          {
            echo "C'est difficile !!";
          }

echo "<br/>";

      //Exo3
          $age = 27;
          $genre = "homme" || "femme";
          if (($genre == "homme") && ($age >= 18))
          {
            echo "Vous êtes un homme et vous êtes majeur !";
          }
          elseif (($genre == "homme") && ($age < 18))
          {
            echo "Vous êtes un homme et vous êtes mineur!";
          }
          elseif (($genre == "femme") && ($age >= 18))
          {
            echo "Vous êtes une femme et vous êtes majeur !";
          }
          elseif (($genre == "femme") && ($age < 18))
          {
            echo "Vous êtes une femme et vous êtes mineur !";
          }

echo "<br/>";

      //Exo4
          $magnitude = 2;
          if ($magnitude == 1) {
            echo "Micro-séisme impossible à ressentir.";
          }
          elseif ($magnitude == 2) {
            echo "Micro-séisme impossible à resentir mais enregistrable par les sismomètres.";
          }
          elseif ($magnitude == 3) {
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
          }
          elseif ($magnitude == 4) {
            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
          }
          elseif ($magnitude == 5) {
            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction.";
          }
          elseif ($magnitude == 6) {
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.  ";
          }
          elseif ($magnitude == 7) {
            echo " Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
          }
          elseif ($magnitude == 8) {
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
          }
          elseif ($magnitude == 9) {
            echo "Séisme capable de tout détruire sur une très vaste zone.  ";
          }

echo "<br>";

      //exo 4 bis :
          $magnitude = 1;
          switch ($magnitude) {
            case 1:
              echo "Micro-séisme impossible à ressentir.";
            break;
            case 2:
              echo "Micro-séisme impossible à resentir mais enregistrable par les sismomètres.";
            break;
            case 3:
              echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
            break;
            case 4:
              echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
            break;
            case 5:
              echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction.";
            break;
            case 6:
              echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.  ";
            break;
            case 7:
              echo " Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
            break;
            case 8:
              echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
            break;
            case 9:
              echo "Séisme capable de tout détruire sur une très vaste zone.  ";
            break;
          }

echo "<br>";

      //Exo5
            $maVariable = "homme";
            if ($maVariable == "homme") {
              echo "C'est un développeur !";
            }
            else {
              echo "c'est une développeuse ! ";
            }

echo "<br>";

      //Exo6
            $monAge = 18;
            if ($monAge >= 18) {
              echo "Tu es majeur !";
            }
            else {
              echo "Tu n'est pas majeur !";
            }

echo "<br>";

      //Exo7
            $maVariable = True;
            if ($maVariable == True) {
              echo "c'est Ok !";
            }
            else{
              echo "c'est pas Ok !";
            }

echo "<br>";
      //Exo8
            if ($maVariable) {
              echo "C'est Ok !";
            }
            else {
              echo "C'est pas bon !";
            }
      ?>
  </body>
</html>
