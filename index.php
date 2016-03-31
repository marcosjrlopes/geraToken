<?php

$token = strtoupper('TK' . sha1(uniqid(rand(), true)));
echo $token;

echo "<br>";
