<?php

// require __DIR__ . '/data/data.php';
// require __DIR__ . '/functions/random_pass.php';

$letters = [
  'a',
  'b',
  'c',
  'd',
  'e',
  'f',
  'g',
  'h',
  'i',
  'j',
  'k',
  'l',
  'm',
  'n',
  'o',
  'p',
  'q',
  'r',
  's',
  't',
  'u',
  'v',
  'w',
  'x',
  'y',
  'z'
];

$numbers = [
  '0',
  '1',
  '2',
  '3',
  '4',
  '5',
  '6',
  '7',
  '8',
  '9'
];

$symbols = [
  '!',
  '?',
  '&',
  '%',
  '$',
  '<',
  '>',
  '^',
  '+',
  '-',
  '*',
  '/',
  '(',
  ')',
  '[',
  ']',
  '{',
  '}',
  '@',
  '#',
  '_',
  '='
];

$pass_length = 8;

function random_pass($pass_length, $letters, $numbers, $symbols){
  $pass = [];
  for($i = 0; $i < $pass_length; $i++){
    $l_n_s = rand(1, 3);
    if($l_n_s === 1){
      $l_r = rand(0, (count($letters)- 1));
      array_push($pass, $letters[$l_r]);
    }elseif($l_n_s === 2){
      $n_r = rand(0, (count($numbers)- 1));
      array_push($pass, $numbers[$n_r]);
    }elseif($l_n_s === 3){
      $s_r = rand(0, (count($symbols)- 1));
      array_push($pass, $symbols[$s_r]);
    };
  }
  return $pass;
};


var_dump(random_pass($pass_length, $letters, $numbers, $symbols));

$array_pass = random_pass($pass_length, $letters, $numbers, $symbols);


?>

<?php include __DIR__ . '/partials/head.php' ?>

<body>
  
</body>
</html>