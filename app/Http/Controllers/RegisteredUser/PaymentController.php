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
        Payment::create($request->validated() + [
            'user_id' => Auth::user()->id,
            'transaction_id' => Str::uuid(),
        ]);


        // Set success and failure callback URLs.
        $successUrl = 'https://example.com/success.php';
        $failureUrl = 'https://example.com/failed.php';

        // Initialize eSewa client for development.
        $esewa = new Client([
            'merchant_code' => 'EPAYTEST',
            'success_url' => $successUrl,
            'failure_url' => $failureUrl,
        ]);

        // Initialize eSewa client for production.
        $esewa = new Client([
            'merchant_code' => 'b4e...e8c753...2c6e8b',
            'success_url' => $successUrl,
            'failure_url' => $failureUrl,
        ]);
        return back();
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
