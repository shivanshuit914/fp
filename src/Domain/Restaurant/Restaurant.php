<?php

namespace Domain\Restaurant;

class Restaurant
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $address;

    /**
     * Restaurant constructor.
     * @param string $name
     * @param string $address
     */
    private function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * @param string $name
     * @param string $address
     * @return Restaurant
     */
    public static function withNameAndAddress(string $name, string $address) : Restaurant
    {
        return new static($name, $address);
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
}
