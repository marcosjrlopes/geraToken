<?php

$token = strtoupper('TK' . sha1(uniqid(rand(), true)) . 'MGT');
echo $token;

echo "<br>";

echo uniqid(rand(), true);