<?php
include __DIR__ . '../data/data.php';

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

?>