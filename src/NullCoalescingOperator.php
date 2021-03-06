<?php

namespace SteveShanks\PHP7Features;

class NullCoalescingOperator
{
    public function getThing($input)
    {
        return $input['thing'] ?? false;
    }

    public function getFromChain(array $input)
    {
        return $input['one'] ?? $input['two'] ?? false;
    }
}
