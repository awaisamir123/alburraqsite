<?php

include "constants/credit-card-definitions.php";

return array(

    'payment-provider' => [
        PAYMENT_PROVIDER_AUTHORIZE_NET_SIM_V1 => [
            'javascript' => [
                'production' => 'https://js.authorize.net/v1/Accept.js',
                'sandbox' => 'https://jstest.authorize.net/v1/Accept.js',
            ],
        ],
        PAYMENT_PROVIDER_STRIPE_V2 => [
            'javascript' => [
                'production' => 'https://js.stripe.com/v2/',
                'sandbox' => 'https://js.stripe.com/v2/',
            ],
        ],
    ]
);
