<?php

declare(strict_types=1);

namespace SteveShanks\PHP7Features;

class ReturnTypeDeclarations
{
    public function returnInt($thing): int
    {
        return $thing;
    }

    public function returnObject($thing): ReturnTypeDeclarations
    {
        return $thing;
    }
}
