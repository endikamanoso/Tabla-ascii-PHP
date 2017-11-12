<!doctype html>
<html lang="en">
  <head>
    <title>TABLAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
  <div class="jumbotron">
    <h1>tabla ascii</h1> 
  </div>
  <?php
  	$contador=1;
  	$caracter="";
  
  	echo("<table class='table table-striped'>");
  	echo "<tr><th>caracter</th><th>ascii</th><th>caracter</th><th>ascii</th><th>caracter</th><th>ascii</th>";
  	for ($i = 1; $i < 44 ; $i++) {
  		echo "<tr>";
  		for ($j=1; $j < 4 ; $j++) {
  			
  			if ($contador<=128) {
  			$caracter=chr($contador);
  			echo "<td>$contador</td>";
  			echo ("<td>$caracter</td>");
  			$contador++;

  		}
  		
  	}
  	echo "</tr>";
  	
  	}
  	echo "</table>";

  ?>
  
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>