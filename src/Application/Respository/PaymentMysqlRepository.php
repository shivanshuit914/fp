<?php
namespace  Application\Repository;

use Domain\Payment\Payment;
use Domain\Payment\PaymentRepositoryInterface;

class PaymentMysqlRepository implements PaymentRepositoryInterface
{
    public function save(Payment $payment)
    {
        $sql = "INSERT INTO payments (amount, table_number, reference_number, restaunrat, card_type) 
                VALUES (:amount, :table_number, :reference_number, :restaunrat, :card_type)";

        // need to get it from container now its not working
        $sth = $this->db->prepare($sql);
        $sth->bindParam("amount", $payment->getAmount()->getAmount());
        $sth->bindParam("restaurant", $payment->getRestaurant()->getName());
        $sth->bindParam("table_number", $payment->getTable()->getNumber());
        $sth->bindParam("card_type", $payment->getCard()->getType());
        $sth->bindParam("reference_number", $payment->getReferenceNumber());
        $sth->execute();
    }


    public function fetchBy(array $params)
    {
        // to generate report.

    }
}