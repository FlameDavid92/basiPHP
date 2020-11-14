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

                <?php 
                  //echo "Questa è la mia prima stringa.";
                  //print " Questa è la seconda riga";
                  //echo "<br/>";
                  //$txt = "Davide";
                  //$TXT = "- Non sono $txt";
                  //$numero = "28";
                  //echo "Ciao il mio nome è: ".$txt; //punto di concatenzaione
                  //echo $txt, $numero, " ", $TXT; //più argomenti
                  echo true, false;
                ?>

                <div class="row">
                  <a class="btn btn-primary" href="tag_ed_output.php" role="button">Tag ed output</a>
                  <a class="btn btn-primary" href="variabili.php" role="button">variabili parte 1</a>
                  <a class="btn btn-primary" href="variabili.php" role="button">Varibili parte 2</a>
                  <a class="btn btn-primary" href="echo_e_concatenazione.php" role="button">Echo e concatenazione</a>
                  <a class="btn btn-primary" href="var_booleane.php" role="button">Variabili Booleane</a>
                  <a class="btn btn-primary" href="if_else.php" role="button">Costrutto IF - ELSE</a>
                  <a class="btn btn-primary" href="costrutto_switch.php" role="button">Costrutto SWITCH</a>
                  <a class="btn btn-primary" href="funzioni_custom.php" role="button">Funzioni CUSTOM</a>
                  <a class="btn btn-primary" href="array.php" role="button">Array indicizzati ed associativi</a>
                  <a class="btn btn-primary" href="array.php" role="button">Array : count, var_dump e tag "PRE"</a>
                  <a class="btn btn-primary" href="array.php" role="button">Array: come cancellare o implementare elementi</a>
                  </div>
                  <div class="row">
                    <a class="btn btn-primary" href="ciclo-for.php" role="button">Ciclo FOR</a>
                    <a class="btn btn-primary" href="ciclo-foreach.php" role="button">Ciclo FOREACH</a>
                    <a class="btn btn-primary" href="ciclo-while.php" role="button">Ciclo WHILE</a>
                    </div>

                </div>

              </div>

			 </div>
				<!-- /.row -->
			</div>
        </div>
<footer>
        <div class="small-print">
        	<div class="container">
        		<h3 class="text-center"></class>Copyright &copy; Davide Figuccia 2020 </h3>
        	</div>
        </div>
	</footer>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
