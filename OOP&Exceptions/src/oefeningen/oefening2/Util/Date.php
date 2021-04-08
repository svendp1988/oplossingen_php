<?php


namespace Util;


use Exceptions\DateException;

class Date
{
    private $day;
    private $month;
    private $year;
    private static $MONTHS = array(
        1 => "jan", 2 => "feb", 3 => "mar", 4 => "apr", 5 => "may",
        6 => "jun", 7 => "jul", 8 => "aug", 9 => "sep", 10 => "oct",
        11 => "nov", 12 => "dec"
    );

    private function __construct(int $day = 1, int $month = 1, int $year = 2008) {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public static function make($day = 1, int $month = 1, int $year = 2008): Date
    {
        try {
            return new self($day, $month, $year);
        } catch (\TypeError $error) {
            throw new DateException($error->getMessage(), 0);
        }
    }

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @param int $day
     */
    public function changeDay(int $day): Date
    {
       return new self($day, $this->month, $this->year);
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @param int $month
     */
    public function changeMonth(int $month): Date
    {
        return new self($this->day, $month, $this->year);
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function changeYear(int $year): Date
    {
        return new self($this->day, $this->month, $year);
    }

    public function __toString() :string
    {
        return "$this->day . '/' . $this->month . '/' . $this->year ";
    }

    public function printMonth() :string
    {
        $writtenMonth = self::$MONTHS[$this->month];
        return "$this->day/$writtenMonth/$this->year";
    }
}