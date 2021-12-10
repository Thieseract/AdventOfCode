<?php 

require 'input.php';

$testInput = array(199, 200, 208, 210, 200, 207, 240, 269, 260, 263);

function partOne($depths){

  $i         = 0;
  $increases = 0;
  $previous  = 0;

  foreach( $depths as $depth){
    if($i === 0){
      $previous = $depth;
    } else {
      if( $depth > $previous){
        $increases++;
      }
      $previous = $depth;
    }
    $i++;
  }
  
  echo 'increased this many times:' . $increases;
}

function partTwo($depths){

  $combined  = array(); 

  for($i = 0; $i < sizeof($depths) - 2; $i++){
    $combined[] = $depths[$i] + $depths[$i + 1] + $depths[$i + 2];
  }

  return $combined;

}

partOne(partTwo($input));

