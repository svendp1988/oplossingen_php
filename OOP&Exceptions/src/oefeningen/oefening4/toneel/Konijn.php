<?php


namespace toneel;


class Konijn extends Acteur
{

    /**
     * Egel constructor.
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        parent::__construct($x, $y);
    }


    function beschrijf()
    {
        print ("Ik ben een konijn op positie x = " . parent::getPositie()->getX() . ", y = " . parent::getPositie()->getY());
    }

    function interageer(WereldObject $wereldObject){}
}