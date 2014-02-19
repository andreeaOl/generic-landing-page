PAYMILL-PHP
===========

[![Build Status](https://travis-ci.org/paymill/paymill-php.png?branch=master)](https://travis-ci.org/paymill/paymill-php)

How to test
-----------
There are different credit card numbers, frontend and backend error codes, which can be used for testing.
For more information, please read our testing reference.
https://www.paymill.com/en-gb/documentation-3/reference/testing/


Getting started with PAYMILL
----------------------------

Please include this library via Composer in your composer.json and execute **composer update** to refresh the autoload.php.

```
{
    "require": {
        "paymill/paymill": "v3.0.0"
    }
}
```

1.  Instantiate the request class with the following parameters:
    $apiKey: First parameter is always your private API (test) Key

    ```php
        $service = new Request($apiKey);
    ```
2.  Instantiate the model class with the parameters described in the API-reference:
    ```php
        $payment = new Payment();
        $payment->setToken("098f6bcd4621d373cade4e832627b4f6");
    ```
3.  Use your desired function:

    ```php
        $paymentResponse = $service->create($payment);
        $paymentId = $paymentResponse->getId();
    ```

    It recommend to wrap it into a "try/catch" to handle exceptions like this:
    ```php
        try{
            $paymentResponse = $service->create($payment);
            $paymentId = $paymentResponse->getId();
        }catch(PaymillException $e){
            //Do something with the error informations below
            $e->getResponseCode();
            $e->getStatusCode();
            $e->getErrorMessage();
        }
    ```

Documentation
--------------

For further information, please refer to our official PHP library reference: https://www.paymill.com/en-gb/documentation-3/reference/api-reference/index.html
