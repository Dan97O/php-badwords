<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <!-- 
  Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file (index.php) dovrà permettere all’utente di inserire i dati (tramite un form) e inviare la richiesta al server.
 -->
  
<div class="container">
  <div class="row">
    <div class="col-12 d-flex justify-content-center mt-5">
      <form action="script.php" method="GET">
        <div class="mb-3">
          <label for="name">Paragrafo</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Inserisci il paragrafo...">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Parola da censurare</label>
          <input type="text" name="password" id="password" class="form-control" placeholder="Inserisci la parola...">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Invia</button>
        </div>
      </form>
    </div>
  </div>
</div>


</body>
</html>