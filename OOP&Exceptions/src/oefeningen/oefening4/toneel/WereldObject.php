<?php


namespace toneel;


abstract class WereldObject
{
    private $positie;

    /**
     * WereldObject constructor.
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->positie = new Punt($x, $y);
    }

    /**
     * @return Punt
     */
    public function getPositie(): Punt
    {
        return $this->positie;
    }

    public function berekenAfstand(WereldObject $wereldObject): float
    {
        return $this->positie->berekenAfstand($wereldObject->positie);
    }

    abstract function beschrijf();
}