<?php


class Rectangle extends Shape
{
    private $width, $height;
    public function __construct(Point $point, $width, $height)
    {
        parent::__construct($point);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculatePerimiter()
    {
        return 2 * $this->width + 2 * $this->height;
    }

    function __toString() :string
    {
        return "Rectangle, Point = " . parent::__toString() . " width = $this->width, height = $this->height";
    }


    public function draw()
    {
        print ($this->__toString());
        print ("\n");
    }
}