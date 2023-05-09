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
    
     <title>VOTAÇÃO</title>
</head>
<body class="bg-body-secondary">
    <div class="container text-center">
        <div class="row">
          <div class="col-1">
            &nbsp;
          </div>
          <div class="col bg-primary">
            <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">VOTAÇÃO</a>
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
    <!-- título 1-->
    <h1>VOTE -> escolha uma das opções abaixo!!!</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="radio" name="opc" value="opcao1">Vermelho<br>

        <input type="radio" name="opc" value="opcao2">Azul<br>
        
        <input type="radio" name="opc" value="opcao3">Verde<br>
        
        <input type="submit" value="Votar"></form>
    <!-- título - Resultado-->
    <h1>Resultado da Votação:</h1>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $opcao = $_POST['opc'];
    $arquivo = 'voto.txt';
    $votos = [];
    if (file_exists($arquivo)) {
        $votos = unserialize(file_get_contents($arquivo));
    }
    if (array_key_exists($opcao, $votos)) {
        $votos[$opcao]++;
    } else {
        $votos[$opcao] = 1;
    }
    file_put_contents($arquivo, serialize($votos));
}

if (file_exists($arquivo)) {
    $votos = unserialize(file_get_contents($arquivo));
    if (empty($votos)) {
        echo "Nenhum voto foi registrado.";
    } else {
        foreach ($votos as $opcao => $qnt) {
            echo "Opção {$opcao}: {$qnt} votos<br>";
        }
    }
}
?>


 </div>
<div class="col-1">
    &nbsp;
</div>
</div>    
</body>
</html>