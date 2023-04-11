<?php

include "config/constants/credit-card-definitions.php";

return
    array_merge(
        [
            'production' => array(
                'hostname' => 'https://api.square.parts',
                'api-key' => '8da6d2f4630dae9d75ad848c848c98d0', // this is a secret, please don't publicly share this private key
                'connection-timeout' => 10,
                'execution-timeout' => 30,
                'sandbox-mode' => false,

                // these credit-card-* keys are ignored if 'use-payment-info-from-api' is set to true
                'credit-card-public-key' => 'pk_test_z9xCr0sLZNjHMyx7FrQR5Mgh',
                'credit-card-api-login-id' => '',
                'credit-card-sandbox-mode' => false,
                'credit-card-provider-name' => PAYMENT_PROVIDER_STRIPE_V2,
            ),
            'production-credit-card-testing' => array(
                'hostname' => 'https://api.square.parts',
                'api-key' => '8da6d2f4630dae9d75ad848c848c98d0', // this is a secret, please don't publicly share this private key
                'connection-timeout' => 10,
                'execution-timeout' => 30,
                'sandbox-mode' => false,

                // these credit-card-* keys are ignored if 'use-payment-info-from-api' is set to true
                'credit-card-public-key' => 'pk_test_z9xCr0sLZNjHMyx7FrQR5Mgh',
                'credit-card-api-login-id' => '',
                'credit-card-sandbox-mode' => true,
                'credit-card-provider-name' => PAYMENT_PROVIDER_STRIPE_V2,
            ),
            'development' => array(
                'hostname' => 'https://dev.api.square.parts',
                'api-key' => '8da6d2f4630dae9d75ad848c848c98d0', // this is a secret, please don't publicly share this private key
                'connection-timeout' => 10,
                'execution-timeout' => 30,
                'sandbox-mode' => true,

                // these credit-card-* keys are ignored if 'use-payment-info-from-api' is set to true
                'credit-card-public-key' => 'pk_test_z9xCr0sLZNjHMyx7FrQR5Mgh',
                'credit-card-api-login-id' => '',
                'credit-card-sandbox-mode' => true,
                'credit-card-provider-name' => PAYMENT_PROVIDER_STRIPE_V2,

            ),

            // determines what array key, above, to use for settings. Useful for creating development and production settings
            'mode' => 'production',

            // allow you to override they payment processor, to either pull from your account via the API, or to pull the settings locally, from this file (great for testing and developing)
            // if set to true, the sandbox mode and the credit card and payment provider info comes from your dashboard settings in https://manager.square.parts. Your default Payment Processor account details are used on the checkout, rather than what is defined above in the different "modes"
            // if set to false, the values are taken from the various modes above, such as production, or development
            'use-payment-info-from-api' => true,

            // set the default currency code for the site
            'currency_code' => 'USD',

        ],

        // additional configuration files loaded here
        include('config/payment.php') // include payment configuration
    );
