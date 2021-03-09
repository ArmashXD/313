<?php

namespace App\Http\Controllers;

use App\Models\Payment2;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Omnipay\Omnipay;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function payStripe($data, User $user)
    {
        if ($data['stripeToken']) {

            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey("sk_test_51IREVmHqFRjOgHlr4bbdbazwS9mGCPbIMN0D93bkZCXn1MjmutLKa3mgIM1U43kpBL1gBtnt2PuhM7BztJcZwVZ700AUWJOfTC");
            $token = $data['stripeToken'];
            $response = $gateway->purchase([
                'amount' => str_replace('£ ', '', $data['amount']),
                'currency' => "USD",
                'token' => $token,
            ])->send();

            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();

                $isPaymentExist = Payment2::where('payment_id', $arr_payment_data['id'])->first();

                if (!$isPaymentExist) {
                    $payment = new Payment2;
                    $payment->payment_id = 'P-' . rand(0,99999);
                    $payment->payment_method = $arr_payment_data['id'];
                    $payment->user_id = $user->id;
                    $payment->amount = $arr_payment_data['amount'] / 100;
                    $payment->currency = "USD";
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();
                }
            } else {
                // payment failed: display message to customer

              echo  $response->getMessage();
            }
        }
    }
}
