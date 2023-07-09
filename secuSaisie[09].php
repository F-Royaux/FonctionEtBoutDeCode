<?php

$x = readline("saisir");
echo "$x" ;
while ($x<0 || ctype_digit($x) == false){
$x = readline("je n'ai pas compris");
}