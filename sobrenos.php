  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Currículo</title>
  </head>
    <body>
<?php
include "cabecalho.php";
?>
        <hgroup>
            <h1>Currículos do grupo.</h1>
            <a class="btn btn-primary" href="curriculoDavy.php" role="button">Curriculo do Davy</a>
            <a class="btn btn-primary" href="curriculoCristhian.php" role="button">Curriculo do Cristhian</a>
            <a class="btn btn-primary" href="curriculoGabriel.php" role="button">Curriculo do Gabriel</a>
        </hgroup>

        <footer> 
      <?php
        include "rodape.php";  
        ?>
        </footer>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>