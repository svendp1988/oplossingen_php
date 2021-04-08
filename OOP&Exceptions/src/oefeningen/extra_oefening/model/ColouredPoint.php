<?php


namespace model;


class ColouredPoint extends Punt
{
    private $color;

    private function __construct(int $x, int $y, int $color) {
        parent::__construct($x, $y);
        $this->color = $color;
    }

    public static function make(int $x, int $y, int $color): ColouredPoint
    {
        return new self($x, $y, $color);
    }

    public function __toString(): string
    {
        return "[x: " . parent::getX() . "], [y: " . parent::getY() . "], [rgb: " . str_pad(strtoupper(dechex($this->color)), 8, "0x", STR_PAD_LEFT) . "]";
    }
}