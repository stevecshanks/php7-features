<?php

namespace SteveShanks\PHP7Features;

class AnonymousClass
{
    public function getMultiplier(int $amount): callable
    {
        return new class ($amount) {
            private $amount;

            public function __construct(int $amount)
            {
                $this->amount = $amount;
            }

            public function __invoke(int $element): int
            {
                return $element * $this->amount;
            }
        };
    }
}
