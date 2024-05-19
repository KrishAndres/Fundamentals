<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $discriminant = $b * $b - 4 * $a * $c;

    echo "The answer is: $discriminant"
?>