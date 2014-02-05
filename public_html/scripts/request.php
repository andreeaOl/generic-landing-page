<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
<link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">
<?php
 
// Please download the newest version of our Paymill PHP Wrapper at
// https://github.com/paymill/paymill-php/releases and put it into a folder where it can be autoloaded
// or
// Download the newest stable version via composer "paymill/paymill": "v3.*" on packagist.org
// https://packagist.org/packages/paymill/paymill
define('PAYMILL_API_KEY', 'e095cc1a5db0b9fbe07b00c9d44a3d88');
if (isset($_POST['paymillToken'])) {
$token = $_POST['paymillToken'];
$request = new Paymill\Request(PAYMILL_API_KEY);
$transaction = new Paymill\Models\Request\Transaction();
$transaction->setAmount(4200) // e.g. "4200" for 42.00 EUR
->setCurrency('EUR')
->setToken($token)
->setDescription('Test Transaction');
$response = $request->create($transaction);
}
?>
</head>
<body>
<div class="container">
<h1>We appreciate your purchase!</h1>
 
<h4>Transaction:</h4>
<pre>
<?php print_r($response); ?>
</pre>
</div>
<script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
</body>
</html>