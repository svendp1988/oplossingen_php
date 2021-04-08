<?php
namespace map;

class Road {
    private $points;

    private function __construct()
    {
        $this->points = array();
    }

    public static function make(): Road
    {
        return new self();
    }

    public function addPoint(Point $point): void
    {
        $this->points[] = $point;
    }

    public function manhattanDistance(): int
    {
        $sum = 0;
        for ($i = 0; $i < count($this->points) - 1; $i++) {
            $sum += $this->points[$i]->manhattanDistance($this->points[$i + 1]);
        }
        return $sum;
    }
}
