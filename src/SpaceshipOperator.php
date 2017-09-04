<?php

namespace SteveShanks\PHP7Features;

class SpaceshipOperator
{
    public function sort(array $array)
    {
        usort($array, function ($a, $b) {
            return $a <=> $b;
        });
        return $array;
    }
}
