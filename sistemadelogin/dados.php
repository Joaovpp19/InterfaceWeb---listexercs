<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
     <title>Acesso Negado- PHP</title>
</head>
<body class="bg-body-secondary">
    <div class="container text-center">
        <div class="row">
          <div class="col-1">
            &nbsp;
          </div>
          <div class="col bg-red">
            <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Falha no acesso</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
             aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
           </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
               </div>
            </div>
         </div>
       </nav>
    </div>
        <div class="col-1">
            &nbsp;
          </div>
        </div>
            <div class="row">
              <div class="col-1">
                &nbsp;
              </div>
              <div class="col bg-white"><br>
              <?php

function verificacaodados($name, $password, $verificacaodados) {
    foreach ($verificacaodados as $usuario) {

    if($usuario['name'] === $name && $usuario['password'] === $password) {
    return true;
   }}
    return false;
 }

 $verificacaodados = array(
    array('name' => 'João Vitor', 'password' => 'Jonvs07'),);
$username = $_POST['name'];
$password = $_POST['password'];

if (verificacaodados($username, $password, $verificacaodados)) {
    header('Location: destino.php');
    exit;
} 
else {
    echo '<h1>Seu acesso foi negado!</h1>';
    echo '<h2>Nome de usuario e/ou senha estão incorretos';}
?><br><br><form method="POST" action="index.php">
<input type="submit" name="Tente novamente" value="Tente novamente">
</div>
<div class="col-1">
    &nbsp;
</div>
</div>    
</body>
</html>