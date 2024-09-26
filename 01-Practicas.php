<?php

// Almacena tres números en variables y escribirlos en pantalla de manera ordenada.
$a = 10;
$b = 20;
$c = 6;

if ($a<= $b && $a<=$c && $b<=$c) {
    print("$a - $b - $c ");
} elseif($a<= $b && $a<=$c && $b>=$c){
    print("$a - $c - $b ");
} elseif($b<= $a && $b<$c && $a>$c){
    print("$b - $c - $a");
} elseif($b<= $a && $b<$c && $a<$c){
    print("$b - $a - $c");
} elseif($c<= $a && $c<$b && $a>$b){
    print("$b - $a - $b");
} elseif($c<= $a && $c<$b && $a>$b){
    print("$c - $b - $a");
}
