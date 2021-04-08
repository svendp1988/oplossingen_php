<?php
require_once("Drawable.php");

abstract class Shape implements Drawable
{
    private $point;

    public function __construct(Point $point)
    {
        $this->point = $point;
    }

    function __toString(): string
    {
        return $this->point->__toString();
    }

    public abstract function calculatePerimiter();

}