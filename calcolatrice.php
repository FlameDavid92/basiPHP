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



/************************ Cacolatrice **********************************/
<form name="number1" method="post">
number1 <input type="number" name="number1"><br>

number1 <input type="number" name="number2"><br>

<input type="radio" name="operatori"  value="addiziona">+<br/>
<input type="radio" name="operatori"  value="sottrai">-<br/>
<input type="radio" name="operatori" value="moltiplica">x<br/>
<input type="radio" name="operatori"  value="dividi">/<br/>
<button type="submit" >Calculate</button><input type="reset" value="Reset!"><br>
</form>

<?php

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operatore = $_POST['operatori'];
  //  echo "Hai selezionato l'operatore: $operatore";

    switch ($operatore) {
        case 'addiziona':
            $answer = $number1 + $number2;
            break;
        case 'sottrai':
            $answer = $number1 - $number2;
            break;
        case 'moltiplica':
            $answer = $number1 * $number2;
            break;
        case 'dividi':
            $answer = $number2 / $number2;
            break;
        default:
            $answer = 'Non hai selezionato nessun metodo.';
            break;
    }

    echo "<p>" . $answer . " </p>";

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
