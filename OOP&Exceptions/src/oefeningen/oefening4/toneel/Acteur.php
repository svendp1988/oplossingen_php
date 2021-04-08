<?php


namespace toneel;


abstract class Acteur extends WereldObject
{

    /**
     * Acteur constructor.
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        parent::__construct($x, $y);
    }

    abstract function beschrijf();

    abstract function interageer(WereldObject $wereldObject);

    public function stapBoven(): void {
        parent::getPositie()->setY(parent::getPositie()->getY() + 1);
    }

    public function stapLinks(): void {
        parent::getPositie()->setX((parent::getPositie()->getX() - 1));
    }

    public function stapOnder(): void {
        parent::getPositie()->setY(parent::getPositie()->getY() - 1);
    }

    public function stapRechts(): void {
        parent::getPositie()->setX(parent::getPositie()->getX() + 1);
    }
}