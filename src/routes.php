<?php
// Routes

$app->group('/v1', function () {

    $this->post('/payment/accept', 'PaymentsController:acceptPayment');

    $this->get('/payment/report', 'PaymentsController:getReport');
});