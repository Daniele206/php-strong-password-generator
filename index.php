<?php

require __DIR__ . '/data/data.php';
require __DIR__ . '/functions/random_pass.php';

$pass_length = 8;

var_dump(random_pass($pass_length, $letters, $numbers, $symbols));

$array_pass = random_pass($pass_length, $letters, $numbers, $symbols);


?>

<?php include __DIR__ . '/partials/head.php' ?>

<body>

</body>
</html>