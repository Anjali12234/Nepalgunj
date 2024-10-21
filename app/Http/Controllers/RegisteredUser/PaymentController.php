<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\StorePaymentRequest;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RemoteMerge\Esewa\Client;

require  '../vendor/autoload.php';


class PaymentController extends Controller
{

    public function paymentIndex()
    {
        return view('registeredUser.payment');
    }
    public function storepayment(StorePaymentRequest $request)
    {
        $amount = $request->amount;

        // Set success and failure callback URLs.
        $successUrl = route('registeredUser.payment.success');
        $failureUrl = route('registeredUser.payment.failed');

        // Initialize eSewa client for development.
        $esewa = new Client([
            'merchant_code' => 'EPAYTEST',
            'success_url' => $successUrl,
            'failure_url' => $failureUrl,
        ]);

        // Attempt to process payment
        $paymentResponse = $esewa->payment(0, $amount, 0, 0, 0);

        if ($paymentResponse->isSuccess()) {
            // Payment succeeded, now store the data in the database
            Payment::create($request->validated() + [
                'user_id' => Auth::id(),
                'transaction_id' => Str::uuid(),
                'payment_date' => now(),
                'payment_status' => 'success' // Mark payment as successful
            ]);

            return redirect()->route('registeredUser.payment.success');
        } else {
            // Payment failed, do not save to the database
            return redirect()->route('registeredUser.payment.failed')->withErrors(['message' => 'Payment failed. Please try again.']);
        }
    }


    public function success()
    {
        echo "sucesss";
    }

    public function failed()
    {
        echo "failed";
    }
}
