<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Semaine</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js">

    </script>

  </head>
  <body>
    <header>

    <form class="" action="index.php" method="get" onsubmit="return verifForm(this)" >
        <input type="text"  name="day" placeholder="Choisissez un jour" autofocus>
        <button type="button" name="button">Vas-y !</button>
    </form>

  </header>


    <section>


    <?php


    $semaine = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');


    //Boucle for
    echo "<div><h3>Boucle for</h3>";
    for ($i=0; $i < 7 ; $i++) {
      echo $semaine[$i] . "<br>";
    }
    echo "</div>";


    //Boucle foreach
    echo "<div><h3>Boucle foreach</h3>";
    foreach ($semaine as $value) {
      echo $value . "<br>";
    };
    echo "</div>";


    // Boucle while
    echo "<div><h3>Boucle while</h3>";
    $a = 0;
    while ($a < 7) {
      echo $semaine[$a] . "<br>";
      $a++;
    }
    echo "</div>";



    ?>

  </section>

  <section>
    <?php

    if (!empty($_GET['day'])) {

    echo "<div><h2>";

    $d = strip_tags($_GET['day']);
    $day = strtolower($d);



      switch ($day) {
        case 'lundi':
          echo "C'est que le début de la semaine";
          break;

          case 'mardi':
          echo "Patience !";
            break;

          case 'mercredi':
            echo "C'est déjà le milieu de la semaine";
            break;

          case 'jeudi':
            echo "On n'y est presque";
            break;

          case 'vendredi':
            echo "plus que quelques heures";
            break;

          case 'samedi':
            echo "Enfin !!";
            break;

          case 'dimanche':
            echo "Profites, on rattaque bientôt !";

            break;

        default:

          break;
      }

    echo "</h2></div>";
  }

    ?>
  </section>
  </body>
</html>
