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


/************************ COSTRUTTO IF - ELSE **********************************/


   $num1 = 20;
   $num2 = 20;


        if($num1 > $num2) {
           echo "La variabile $num1 è maggiore della variabile $num2";

        }
        elseif($num1 == $num2) {
            echo " le variabili $num1 e $num2 sono uguali";

        }  else {
            echo "Mi dispiace ma la variabile $num1 non è maggiore della variabile $num2";

        }

          echo "<hr>";


                echo "<p>esempio su wordpress</p>";    // crea una linea di separazione

                /*esempio su wordpress*/


        $nome_utente = "Piero";

        if($nome_utente == "Piero") {
            echo "Benvenuto $nome_utente";

        } else {
          echo "Mi dispiace ma non sei ancora registrato!";
        }

        echo "<hr>";
        echo "<p>esempio2 con true e false</p>";    // crea una linea di separazione

        $_user_login = "user registrato";  // la variabile ha un valore quindi esiste un user

        if($_user_login) {                     // ritorna True se la variabile ha un valore - FALSE se la variabile non ha un valore
            echo "Benvenuto $_user_login";

        } else {
          echo "Mi dispiace ma non sei ancora registrato!";
        }


?>


              </div>

			 </div>
				<!-- /.row -->
			</div>
        </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
