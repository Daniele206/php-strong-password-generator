<?php

require __DIR__ . '/data/data.php';
require __DIR__ . '/functions/random_pass.php';

$pass_length = $_GET['pass_lenght'];

$array_pass = random_pass($pass_length, $letters, $numbers, $symbols);

$pass = implode('', $array_pass);


?>

<?php include __DIR__ . '/partials/head.php' ?>

<body class="bg-warning">
  <div class="container">
    <h1 class="fw-bold">Generatore di password</h1>
    <form class="pt-5" action="index.php" method="GET">
    <h3>Inserire la lunghezza della password</h3>
    <div class="input-group input-group-lg w-50">
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="pass_lenght">
    </div>
    <button class="btn btn-primary mt-4">Genera</button>
    </form>
    <h1>La tua password é:</h1>
    <h2 class="fw-bold"><?php echo $pass ?></h2>
  </div>
</body>
</html>