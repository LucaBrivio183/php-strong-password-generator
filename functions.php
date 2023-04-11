<?php
function randomPassword($length)
{
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $password = [];
    $alphaLength = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength);
        $password[] =  $characters[$n];
    }
    return implode($password);
}
