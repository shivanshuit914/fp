<?php

namespace Application\Controller;

use Application\Repository\PaymentMysqlRepository;
use Domain\Payment\PaymentAccepter;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PaymentsController
{
    public function acceptPayment(ServerRequestInterface $request, ResponseInterface $response)
    {
        try {
            $paymentsDetails = $request->getParsedBody();
            $paymentAccepter = new PaymentAccepter(new PaymentMysqlRepository());
            $refNumber = $paymentAccepter->apply($paymentsDetails);

            return $response->withJson(['success' => true, 'refNumber' => $refNumber]);
        } catch (\Exception $exception) {
            return $response->withStatus(400, 'Something went wrong');
        }

    }

    public function getReport()
    {

    }
}