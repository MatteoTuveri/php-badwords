<?php
    $input= $_GET["parola"];
    $paragrafo= $_GET["paragrafo"];
    $paragrafoCorretto = str_replace("$input","***","$paragrafo");
    $lunghezza = strlen($paragrafo);
    $lunghezzaCorretta = strlen($paragrafoCorretto);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="mb-2">
        <div class="mb-1">
    <?php
    echo($paragrafo)
    ?>
        </div>
        <div class="mb-1">
    <?php
    echo($lunghezza)
    ?>
        </div>
    </div>
    <div class="mb-2">
        <div class="mb-1">
    <?php
    echo($paragrafoCorretto)
    ?>
        </div>
        <div class="mb-1">
    <?php
    echo($lunghezzaCorretta)
    ?>
        </div>
    </div>




  </div>


  </div>
</body>

</html>