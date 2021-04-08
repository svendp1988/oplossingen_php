<?php

namespace map;

class Point
{
    private $x;
    private $y;

    private function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function make($x, $y): Point
    {
        return new self($x, $y);
    }

    public function manhattanDistance(Point $point): int
    {
        return abs($this->x - $point->x) + abs($this->y - $point->y);
    }
}
