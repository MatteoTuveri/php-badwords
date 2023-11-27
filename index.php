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
    <form action="paragrafo.php" method="GET">
      <div class="mb-3">
        <label for="Input" class="form-label">parola da censurare</label>
        <input type="text" class="form-control" id="Input" name="parola">
      </div>
      <div class="mb-3">
        <label for="Textarea" class="form-label">Inserire testo</label>
        <textarea type="text" class="form-control" id="Textarea" rows="3" name="paragrafo"></textarea>
      </div>
      <button type="submit">Invia</button>
    </form>
  </div>


  </div>
</body>

</html>