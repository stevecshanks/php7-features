<?php

namespace SteveShanks\PHP7Features;

use Iterator;

class GeneratorDelegation
{
    public function getFibonacciIterator(): Iterator
    {
        $generator = function () {
            $initialValues = [0, 1];
            yield from $initialValues;

            list($previous, $current) = $initialValues;
            while (true) {
                $next = $previous + $current;
                $previous = $current;
                $current = $next;
                yield $current;
            }
        };
        return $generator();
    }
}
