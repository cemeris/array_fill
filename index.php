<?php

function getTemplate() {
  return [
      [0, 0, 0],
      [0, 0, 0],
      [0, 0, 0]
  ];
}

function output ($nr, $array) {
  echo "<h3>" . $nr . "</h3>";
  foreach ($array as $index1 => $sub_array) {
    echo "<p>[";
    foreach ($sub_array as $index2 => $value) {
      echo $value . ", ";
    }
    echo "]</p>";
  }
}


$arr1 = getTemplate();
output(0, $arr1);


$arr2 = getTemplate();
for ($i = 0; $i <= 8; $i++) {
  $col = $i % 3;
  $row = ($i - $col) / 3; 
  $arr2[$row][$col] = 'x';
}
output('1_v1', $arr2);

/*

0 % 3 = 0 -> col = 0; row = 0 | 0
1 % 3 = 1 -> col = 1; row = 0 | 0
2 % 3 = 2 -> col = 2; row = 0 | 0

3 % 3 = 0 -> col = 0; row = 1 | 3
4 % 3 = 1 -> col = 1; row = 1 | 3
5 % 3 = 2 -> col = 2; row = 1 | 3

6 % 3 = 0 -> col = 0; row = 2 | 6
7 % 3 = 1 -> col = 1; row = 2 | 6
8 % 3 = 2 -> col = 2; row = 2 | 6

*/

$arr2 = getTemplate();
for ($r = 0; $r <= 2; $r++) {
  for ($c = 0; $c <= 2; $c++) {
    $arr2[$r][$c] = 'x';
  }
}
output('1_v2', $arr2);

/*
$r++; $r += 1; $r += 2; $r -= 1; $r--;

if ($r == 2) {
  continue; // šī izpildes reize tiks izlaista
}

if ($c == 1 && $r < 2) {
  break; // apstādina cikla izpildi
}

    if ($c == 1 && $r < 2) {
      break 2; // apstādina tekošā un viena ārējā cikla izpildi
    }

  r = 0; c = 0
  r = 0; c = 1
  r = 0; c = 2

  r = 1; c = 0
  r = 1; c = 1
  r = 1; c = 2

  r = 2; c = 0
  r = 2; c = 1
  r = 2; c = 2
 */

/**
 PHP

 object       ->    []
 array        []
 function     ()

 JS

 object       .    []
 array        []
 function     ()
 */

