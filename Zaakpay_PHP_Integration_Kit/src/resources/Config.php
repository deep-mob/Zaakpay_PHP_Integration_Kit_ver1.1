<?php

	$merchantIdentifier = "b19e8f103bce406cbd3476431b6b7973"; //Get your merchant identifier on Zaakpay.com

	$secretKey = "0678056d96914a8583fb518caf42828a" ; //Get your secret key on Zaakpay.com

	//Api URL
	$environment = "https://zaakstaging.zaakpay.com" ; //For Live transaction use https://api.zaakpay.com

	//Payment processing URL's
	$transactApi = "/api/paymentTransact/V8" ;

	//Transaction update URL's
	$updateApi = "/updatetransaction" ;

	//Transaction check status URL's
	$checkStatusApi = "/checkTxn?v=5" ;

	//Url for test response file
	$returnUrl = "http://localhost/Zaakpay_PHP_Integration_Kit/src/com/zaakpay/api/Response.php" ; //Change this with your response file
?>
