<?php

namespace SteveShanks\PHP7Features;

class Expectations
{
    protected $number;

    public function __construct()
    {
        $this->number = 0;
    }

    public function add(int $number)
    {
        assert($number > 0);
        $this->number += $number;
    }

    public function subtract(int $number)
    {
        assert($number > 0, new \InvalidArgumentException('Not a positive int'));
        $this->number -= $number;
    }
}
