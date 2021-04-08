<?php


namespace model;


class Punt
{
    private $x;
    private $y;
    private static $MINIMUMGROOTTE = 0;
    private static $MAXIMUMGROOTTE = 99;

    /**
     * Punt constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $this->controleer($x);
        $this->y = $this->controleer($y);
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
        $this->x = $this->controleer($x);
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
        $this->y = $this->controleer($y);
    }

    public function berekenAfstand(Punt $punt): float
    {
        return (sqrt(pow(($this->x + $punt->x), 2) + pow(($this->y + $punt->y), 2)));
    }

    private function controleer(int $number): int
    {
        if ($number < self::$MINIMUMGROOTTE) {
            return self::$MINIMUMGROOTTE;
        }
        if ($number > self::$MAXIMUMGROOTTE) {
            return self::$MAXIMUMGROOTTE;
        }
        return $number;
    }

    public function drukAf(): void
    {
        print ("x = $this->x, y = $this->y");
    }
}