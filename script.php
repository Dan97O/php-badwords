<!-- 
  Il secondo file (nome a piacere) riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->

 <?php
$name = trim($_GET["name"]);
$password = trim($_GET["password"]);
$censored = str_replace($password, "***" , $password);
//echo $name;
//echo strlen($name);
//echo $password;
//echo $censored;
//echo strlen($password);
?> 

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

  
<div class="container">
  <div class="row">
    <div class="col-12 d-flex justify-content-center align-items-center mt-5 flex-column">
    <h4>Paragrafo:</h4>
    <div>
      <p>
      <?php echo $name;?> n: <?php echo strlen($name); ?>
      </p>
    </div>
    <h4>Password:</h4>
    <div>
      <p>
      <?php echo $censored;?> n: <?php echo strlen($censored); ?>
      </p>
    </div>
    </div>
  </div>
</div>


</body>
</html>