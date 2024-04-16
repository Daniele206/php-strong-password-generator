<?php

session_start();

$pass = $_SESSION['pass'];

?>

<?php include __DIR__ . '/partials/head.php' ?>

<body class="bg-warning">
  <div class="container">
    <h1 class="fw-bold">La tua password é:</h1>
    <h2><?php echo $pass ?></h2>
  </div>
</body>
</html>