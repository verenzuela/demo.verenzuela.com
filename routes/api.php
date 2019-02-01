<?php

use Illuminate\Http\Request;

use PayPal\Api\Amount; 
use PayPal\Api\Details; 
use PayPal\Api\Item; 
use PayPal\Api\ItemList; 
use PayPal\Api\Payer; 
use PayPal\Api\Payment; 
use PayPal\Api\RedirectUrls; 
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\InputFields;
use PayPal\Api\WebProfile;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('create-payment', function(){

	$apiContext = new \PayPal\Rest\ApiContext(
		new \PayPal\Auth\OAuthTokenCredential(
			env('PAYPAL_CLIENT_ID'), //Client ID
			env('PAYPAL_SECRET') //CLient Secret
		)
	);

	$payer = new Payer();
	$payer->setPaymentMethod("paypal");

	$item1 = new Item();
	$item1->setName('Camara')
		->setCurrency('USD')
		->setQuantity(1)
		->setSku("15151515") // Similar to `item_number` in Classic API 
		->setPrice(634.57); 

	/*
	$item2 = new Item(); 
	$item2->setName('Granola bars') 
		->setCurrency('USD') 
		->setQuantity(5) 
		->setSku("321321") // Similar to `item_number` in Classic API 
		->setPrice(2); 
	*/
	$itemList = new ItemList(); 
	$itemList->setItems(array($item1));

	$details = new Details(); 
	$details->setShipping(0) 
		->setTax(0) 
		->setSubtotal(634.57);
	
	$amount = new Amount(); 
	$amount->setCurrency("USD") 
		->setTotal(634.57)
		->setDetails($details);

	$transaction = new Transaction(); 
	$transaction->setAmount($amount) 
		->setItemList($itemList) 
		->setDescription("Pago por camara") 
		->setInvoiceNumber(uniqid());

	$redirectUrls = new RedirectUrls(); 
	$redirectUrls->setReturnUrl(env('APP_URL')."/?success=true") 
		->setCancelUrl(env('APP_URL')."/?success=false");


	//ADD NO SHIPPING OPTION
	$inputFields = new 	InputFields();
	$inputFields->setNoShipping(1);

	$webProfile = new WebProfile();
	$webProfile->setName('test'.uniqid())->setInputFields($inputFields);

	$webProfileId = $webProfile->create($apiContext)->getId();

	$payment = new Payment(); 
	$payment->setExperienceProfileId($webProfileId);
	$payment->setIntent("sale") 
		->setPayer($payer) 
		->setRedirectUrls($redirectUrls) 
		->setTransactions(array($transaction));

	try{
		$payment->create($apiContext);
	} catch (Exception $e) {
		echo $e;
		exit(1);
	}

	return $payment;

});

Route::post('execute-payment', function(Request $request){

	$apiContext = new \PayPal\Rest\ApiContext(
		new \PayPal\Auth\OAuthTokenCredential(
			env('PAYPAL_CLIENT_ID'), //Client ID
			env('PAYPAL_SECRET') //CLient Secret
		)
	);


	$paymentId = $request->paymentID;
	$payment = Payment::get($paymentId, $apiContext);

	$execution = new PaymentExecution();
	$execution->setPayerId($request->payerID);

	try{
		$result = $payment->execute($execution, $apiContext);
	} catch (Exception $e){
		echo $e;
		exit(1);
	}

	return $result;

});