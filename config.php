<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require './autoload.php';

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
    'client_id' => 'AeyyJXw1Z4QcHcraqSunCSnHiFipt9cjRhg7qb1SJeGqhpxuB7ul8p0kcDDqEL2yFQPfuISUS0hVZP63',
    'client_secret' => 'EAM8KrXXEsLAfvwuvzk6Q2FNs9mDgqqGgSIRmb1j91_ru7t_uCJc4P7JEO0BmsAS7ofN6W1kVWTn_jLY',
    'return_url' => 'http://localhost/pp/response.php',
    'cancel_url' => 'http://localhost/pp/payment-cancelled.html'
];

// Database settings. Change these for your database configuration.
$dbConfig = [
    'host' => '151.106.124.51',
    'username' => 'u188140722_instamojo',
    'password' => 'Admin@123',
    'name' => 'u188140722_instamojo'
];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );

    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox' : 'live'
    ]);

    return $apiContext;
}
