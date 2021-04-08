<?php


class Circle extends Shape
{
    private $radius;

    public function __construct(Point $point, $radius)
    {
        parent::__construct($point);
        $this->radius = $radius;
    }

    public function calculatePerimiter()
    {
        return 2 * $this->radius * pi();
    }

    function __toString() :string
    {
        return "Circle, Point = " . parent::__toString() . " radius = $this->radius";
    }

    public function draw()
    {
        print ($this->__toString());
        print ("\n");
    }
}