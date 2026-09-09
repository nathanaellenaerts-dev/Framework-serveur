<?php
function calculerScoreMot($mot)
{
    $mot = strtoupper($mot);
    $score = 0;
    for ($i = 0; $i < strlen($mot); $i++) {
        $score += ord($mot[$i]) - 64;
    }

    return $score;
}

echo calculerScoreMot("hello");
