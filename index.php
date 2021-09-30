<?php

function writeSecretSentence( string $param1, string $param2): string
{
    $result = $param1 . " s'incline face à " . $param2 .".";
    return $result;
}

// dans le echo suivant, on peut remplacer les paramètres par ce que l'on veut 

echo writeSecretSentence("le serpent","la lune");
