<?php


namespace toneel;


class Egel extends Acteur
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
        print ("Ik ben een egel op positie x = " . parent::getPositie()->getX() . ", y = " . parent::getPositie()->getY());
    }

    function interageer(WereldObject $wereldObject)
    {
        if ($wereldObject instanceof Egel && self::berekenAfstand($wereldObject) < 20) {
            print ("Dag egel");
        } else if ($wereldObject instanceof Konijn && self::berekenAfstand($wereldObject) < 10) {
            print ("Dag konijn");
        }
    }
}