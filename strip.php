<?php
require 'vendor/autoload.php';

$stripe = new \Stripe\StripeClient(
  'sk_test_51Joo3jDolkO6nB3NZvjowccRuPb7JccGbuTIurdoXVVg411AF70Oyx03ekJfPvnMQ0AFYIc0dxgmMYb9JabICd6M00VJITfElv'
);

$token=$stripe->tokens->create([
  'card' => [
    'number' => "4242424242424242",
    'exp_month' => 10,
    'exp_year' => 2022,
    'cvc' => 314,
  ],
]);

$customer=$stripe->customers->create([
  'description' => 'This merchant',
  'source' => $token->id,
]);




echo $stripe->charges->create([
  'amount' => 10000,
  'currency' => 'usd',
  'description' => 'Recharge credit',
  'customer' => $customer->id
]);
?>