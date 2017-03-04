<?php

namespace Domain\Payment;

use Domain\Card\Card;
use Domain\Restaurant\Restaurant;
use Domain\Restaurant\Table;

class Payment
{
    /**
     * @var Amount
     */
    private $amount;

    /**
     * @var Table
     */
    private $table;

    /**
     * @var Restaurant
     */
    private $restaurant;

    /**
     * @var Card
     */
    private $card;

    /**
     * @var string
     */
    private $referenceNumber;

    /**
     * @var Amount
     */
    private $tip;

    /**
     * Payment constructor.
     * @param Amount $amount
     * @param Table $table
     * @param Restaurant $restaurant
     * @param Card $card
     * @param string $referenceNumber
     */
    private function __construct(
        Amount $amount,
        Table $table,
        Restaurant $restaurant,
        Card $card,
        string $referenceNumber
    ) {
        $this->amount = $amount;
        $this->table = $table;
        $this->restaurant = $restaurant;
        $this->card = $card;
        $this->referenceNumber = $referenceNumber;
    }

    /**
     * @param Amount $amount
     * @param Table $table
     * @param Restaurant $restaurant
     * @param Card $card
     * @param string $referenceNumber
     * @return Payment
     */
    public static function withDetails(
        Amount $amount,
        Table $table,
        Restaurant $restaurant,
        Card $card,
        string $referenceNumber
    ) :Payment {
        return new static($amount, $table, $restaurant, $card, $referenceNumber);
    }

    public function getAmount() : Amount
    {
        return $this->amount;
    }

    public function getTable() : Table
    {
        return $this->table;
    }

    public function getRestaurant() : Restaurant
    {
        return $this->restaurant;
    }

    public function getCard() : Card
    {
        return $this->card;
    }

    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    public function hasTipOf(Amount $amount)
    {
        $this->tip = $amount;
    }

    public function getTip() : Amount
    {
        return $this->tip;
    }
}
