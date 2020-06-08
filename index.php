<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PSTPagoFacil\ApiClient\Api\AuthApi();
$loginParams = [
    "username" => "mimaildeejemplo@pagofacil.cl",
    "password" => "MiClavedeMentira!"
];

$body = new \PSTPagoFacil\ApiClient\Model\LoginBody($loginParams);

var_dump($body);
die();
try {
    $result = $apiInstance->usersLoginPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->usersLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>