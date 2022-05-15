<?php
$c1 = $_GET['c1'];
$c2 = $_GET['c2'];
$h = $_GET['h'];

function hypotenuse($c1, $c2, $h)
{
    if ($c1 == "x" or $c1 == "X") {
        $raiz = (max($c2, $h) * max($c2, $h)) - (min($c2, $h) * min($c2, $h));
        $result = sqrt($raiz);
        return $result;
    } elseif ($c2 == "x" or $c2 == "X") {
        $raiz = (max($c1, $h) * max($c1, $h)) - (min($c1, $h) * min($c1, $h));
        $result = sqrt($raiz);
        return $result;
    } elseif ($h == "x" or $h == "X") {
        $raiz = (max($c1, $c2) * max($c1, $c2)) + (min($c1, $c2) * min($c1, $c2));
        $result = sqrt($raiz);
        return $result;
    } else {
        return "No X found in this equation";
    }
}

if (isset($c1) && isset($c2) && isset($h)){
    echo hypotenuse($c1, $c2, $h);
}