<?php

namespace SteveShanks\PHP7Features;

class ClosureCall
{
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int
    {
        return $this->number;
    }
}
