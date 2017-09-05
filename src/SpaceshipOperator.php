<?php

namespace SteveShanks\PHP7Features;

class SpaceshipOperator
{
    public function sort(array $array) : array
    {
        usort($array, function (int $a, int $b) {
            return $a <=> $b;
        });
        return $array;
    }
}
