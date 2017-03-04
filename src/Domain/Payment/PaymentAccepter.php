<?php

namespace Domain\Payment;

use Domain\Card\Card;
use Domain\Restaurant\Restaurant;
use Domain\Restaurant\Table;

class PaymentAccepter
{
    /**
     * @var PaymentRepositoryInterface
     */
    private $paymentRepository;

    public function __construct(PaymentRepositoryInterface $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function apply(array $paymentDetails)
    {
        if (empty($paymentDetails['ref_number'])) {
            throw  new \InvalidArgumentException('Payment reference number is missing');
        }

        $amount = Amount::withAmountAndCurrency($paymentDetails['total_amount'], $paymentDetails['currency']);
        $table = Table::withNumber($paymentDetails['table_naumber']);
        $restaurant = Restaurant::withNameAndAddress(
            $paymentDetails['restaurant']['name'],
            $paymentDetails['restaurant']['address']
        );
        $card = Card::withType($paymentDetails['card_type']);
        $payment = Payment::withDetails(
            $amount,
            $table,
            $restaurant,
            $card,
            $paymentDetails['ref_number']
        );

        $this->paymentRepository->save($payment);

        /** this needs to be replaced with UUID geneated by save method */
        return $paymentDetails['ref_number'];
    }
}
