<?php

namespace Domain\Restaurant;

class Table
{
    /**
     * @var int
     */
    private $number;

    /**
     * Table constructor.
     * @param int $number
     */
    private function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * @param int $number
     * @return Table
     */
    public static function withNumber(int $number) : Table
    {
        return new static($number);
    }

    /**
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
}
