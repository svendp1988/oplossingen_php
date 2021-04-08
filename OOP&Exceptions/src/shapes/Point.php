<?php

final class Point
{
    private $x;
    private $y;
    private const MINIMUM_XY = 0;
    private const MAXIMUM_XY = 100;
    private static $countInitialisations = 0;

    public function __construct($x, $y)
    {
        self::setX($x);
        self::setY($y);
        self::$countInitialisations++;
    }

    public function __destruct()
    {
        self::$countInitialisations--;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x): void
    {
        if ($x < self::MAXIMUM_XY && $x > self::MINIMUM_XY ) {
            $this->x = $x;
        } else if ($x >= self::MAXIMUM_XY) {
            $this->x = self::MAXIMUM_XY;
        } else {
            $this->x = self::MINIMUM_XY;
        }
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y): void
    {
        if ($y < self::MAXIMUM_XY && $y > self::MINIMUM_XY) {
            $this->y = $y;
        } else if ($y > self::MAXIMUM_XY) {
            $this->y = self::MAXIMUM_XY;
        } else {
            $this->y = self::MINIMUM_XY;
        }
    }

    /**
     * @return int
     */
    public static function getCountInitialisations(): int
    {
        return self::$countInitialisations;
    }

    function __toString(): string
    {
        return "($this->x , $this->y)";
    }

    public function calculateDistance(Point $point): float
    {
        return sqrt(($this->x - $point->x) * ($this->x - $point->x) + ($this->y - $point->y) * ($this->y - $point->y));
    }
}