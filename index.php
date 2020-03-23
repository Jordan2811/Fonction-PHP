<?php

function writeSecretSentence(string $parametre_1, string $parametre_2) : string
{
    $result="$parametre_1 s'incline face à $parametre_2";
    return $result;
}

echo writeSecretSentence("Loup","lune");

?>