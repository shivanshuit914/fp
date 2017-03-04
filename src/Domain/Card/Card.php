<?php

namespace Domain\Card;

class Card
{
    /**
     * @var string
     */
    private $type;

    /**
     * Card constructor.
     * @param string $type
     */
    private function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param string $type
     * @return Card
     */
    public static function withType(string $type) : Card
    {
        return new static($type);
    }

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
}
