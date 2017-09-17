<?php

namespace SteveShanks\PHP7Features;

class GeneratorReturnExpression
{
    protected $start;
    protected $end;
    protected $generator;

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
        $this->generator = $this->initialiseGenerator();
    }

    protected function initialiseGenerator() : \Generator
    {
        return (function () {
            $total = 0;
            for ($i = $this->start; $i < $this->end; $i++) {
                yield $i;
                $total += $i;
            }
            return $total;
        })();
    }

    public function getValueIterator() : \Iterator
    {
        return $this->generator;
    }

    public function getTotal() : int
    {
        return $this->generator->getReturn();
    }
}
