<?php
    require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey(process.env.STRIPE_KEY);

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$first_name= $POST['first_name'];
$last_name= $POST['last_name'];
$email= $POST['email'];
$token= $POST['stripeToken'];

$customer = \Stripe\Custoemr::create(array(
    'email' => $email,
    'source' => $token
));

$charge = \Stripe\Charge::create(array(
    'amount' => 5000,
    'currency' => 'usd',
    'description' => 'Stripe API',
    'customer' => $customer->id
));

header('Location:  Success.php?tid='.charge->id'& product='$charge->description);