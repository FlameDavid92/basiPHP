<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<div class="jumbotron site-header">
		<div class="container">
			<h1><span class="glyphicon glyphicon-equalizer"></span> Wordpress</h1>
			<p>Le basi di php per wordpress.</p>
		</div>
	</div>
		<div class="footer-color">
			<div class="container text-center">
              <div class="contenuto-php php-color">
                <a class="btn btn-primary" href="index.php" role="button">Torna alla Home</a>
              </br>

<?php


/************************ COSTRUTTO SWITCH **********************************/


 $colore = "arancione";

  switch($colore) {

        case "rosso":
          echo "hai scelto il colore $colore";
        break;

        case "verde":
          echo "hai scelto il colore $colore";
        break;

        case "giallo":
          echo "hai scelto il colore $colore";
        break;

        default:
        echo "non hai selezionato nessun colore rosso o verde o giallo";
  }

?>

              <!-- Esempio pratico col form -->

            <form  method="post">
                Colore: <input type="text" name="colore"></br>
                <input type="submit" name="submit" value="inserisci colore">
              </form>


<?php

              $colore_inserito = $_POST['colore'];

                  switch ($colore_inserito) {

                  case "rosso":
                      echo "hai scelto il colore $colore_inserito";
                 break;

                  case "verde":
                              echo "hai scelto il colore $colore_inserito";
                  break;

                  case "giallo":
                              echo "hai scelto il colore $colore_inserito";
                  break;

                  default:
                            echo "non hai selezionato nessun colore rosso o verde o giallo";

}
            ?>

              </div>

			 </div>
				<!-- /.row -->
			</div>
        </div>
<footer>
        <div class="small-print">
        	<div class="container">
        		<h3 class="text-center"></class>Copyright &copy; Piero Aiello 2017 </h3>
        	</div>
        </div>
	</footer>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
