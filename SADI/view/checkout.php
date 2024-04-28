<?php

require_once __DIR__ . "/stripe/init.php";

$stripe_secret_key = "sk_test_51P3xd1Rop7bwtMDcSrvrUFErSJHZeV0vaEQ3zga0D4hKRt3AlYERxImH0FKD8rGwpZGX6rB6TkRrOnkX6ceJJeDa00X8mzqij8";

\Stripe\Stripe::setApiKey($stripe_secret_key);

// Retrieve the amount from the form data
$amount = $_POST['amount'];

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/project/view/success.php",
    "cancel_url" => "http://localhost/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "bdt",
                "unit_amount" => $amount * 100, // Amount should be in cents
                "product_data" => [
                    "name" => "Payment"
                ]
            ]
        ]
    ]
]);

// Redirect to the Checkout Session URL
header("Location: " . $checkout_session->url);
exit;
?>