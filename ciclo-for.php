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
/************************ Ciclo For Loop **********************************/
/*
for (inizio; test counter; incrementa) {
    code to be executed;
}
inizio = Inizializza il valore del contatore del ciclo
verifica : verifica Se TRUE, il ciclo continua. Se FALSE, il ciclo termina.
incrementa il contatore : aumenta il valore del contatore del ciclo */

for($x=0; $x < 15; $x++ ) {
         if($x== 8) {
           echo "Viva il numero $x </br>";
           piero();                               //inseriamo una funzione nel ciclo for dentro l'IF
           continue;
         }
        echo "Questa è la riga numero $x </br>";

        }
            echo "<hr>";    // crea una linea di separazione
function piero() {

        echo "-->Questa è la mia funzione<-- </br>"; //testiamo il funzionamento
      }

/************************ Ciclo For Foreach **********************************/





 ?>


              </div>

			 </div>
				<!-- /.row -->
			</div>
        </div>
<footer>
        <div class="small-print">
        	<div class="container">

        	</div>
        </div>
	</footer>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
