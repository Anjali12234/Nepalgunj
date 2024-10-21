<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\StorePaymentRequest;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

require  '../vendor/autoload.php';


class PaymentController extends Controller
{

    public function paymentIndex()
    {
        return view('registeredUser.payment');
    }
    // public function storepayment(StorePaymentRequest $request)
    // {
    //     $amount = $request->amount;

    //     // Set success and failure callback URLs.
    //     $successUrl = route('registeredUser.payment.success');
    //     $failureUrl = route('registeredUser.payment.failed');

    //     // Initialize eSewa client for development.
    //     $esewa = new Client([
    //         'merchant_code' => 'EPAYTEST',
    //         'success_url' => $successUrl,
    //         'failure_url' => $failureUrl,
    //     ]);

    //     // Attempt to process payment
    //     $paymentResponse = $esewa->payment(0, $amount, 0, 0, 0);

    //     if ($paymentResponse->isSuccess()) {
    //         // Payment succeeded, now store the data in the database
    //         Payment::create($request->validated() + [
    //             'user_id' => Auth::id(),
    //             'transaction_id' => Str::uuid(),
    //             'payment_date' => now(),
    //             'payment_status' => 'success' // Mark payment as successful
    //         ]);

    //         return redirect()->route('registeredUser.payment.success');
    //     } else {
    //         // Payment failed, do not save to the database
    //         return redirect()->route('registeredUser.payment.failed')->withErrors(['message' => 'Payment failed. Please try again.']);
    //     }
    // }




    // public function storepayment(StorePaymentRequest $request)
    // {
    //     $client = new Client();

    //     // Payment details
    //     $amount = $request->amount;
    //     $refId = uniqid();
    //     $userId = auth()->user()->id;

    //     // eSewa payment request using Guzzle
    //     $response = $client->request('POST', 'https://uat.esewa.com.np/epay/main', [
    //         'form_params' => [
    //             'amt' => $amount,
    //             'tAmt' => $amount,
    //             'pid' => $refId,
    //             'scd' => 'EPAYTEST', // Test merchant code
    //             'su' => route('registeredUser.payment.success'), // Make sure these URLs are correct
    //             'fu' => route('registeredUser.payment.failed'),
    //         ]
    //     ]);

    //     // Store payment details in the database
    //     $payment = Payment::create([
    //         'user_id' => $userId,
    //         'transaction_id' => $refId,
    //         'amount' => $amount,
    //         'payment_method' => 'eSewa',
    //         'payment_date' => now(),
    //     ]);

    //     // Redirect to eSewa's payment gateway
    //     return redirect()->to('https://uat.esewa.com.np/epay/main?' . http_build_query([
    //         'amt' => $amount,
    //         'pdc' => 0,
    //         'psc' => 0,
    //         'txAmt' => 0,
    //         'tAmt' => $amount,
    //         'pid' => $refId,
    //         'scd' => 'EPAYTEST', // Use test merchant code here
    //         'su' => route('registeredUser.payment.success'),
    //         'fu' => route('registeredUser.payment.failed'),
    //     ]));
    // }


    // public function success()
    // {

    //     toast('Payment completed successfully!','success');
    //     // Redirect or perform further actions (e.g., notify user)
    //     return redirect()->route('registeredUser.dashboard');
    // }

    // public function failed()
    // {
    //     toast('payment Failed try again', 'warning');
    //     return redirect()->route('registeredUser.payment.index');
    // }


    public function storepayment(StorePaymentRequest $request)
{
    $client = new Client();

    // Payment details
    $amount = $request->amount;
    $refId = uniqid();
    $userId = auth()->user()->id;

    // Store payment details in the database first
    $payment = Payment::create([
        'user_id' => $userId,
        'transaction_id' => $refId,
        'amount' => $amount,
        'payment_method' => 'eSewa',
        'payment_date' => now(),
        'payment_status' => 0, // Set default status to 0 (Pending)
    ]);

    // eSewa payment request using Guzzle
    $response = $client->request('POST', 'https://uat.esewa.com.np/epay/main', [
        'form_params' => [
            'amt' => $amount,
            'tAmt' => $amount,
            'pid' => $refId,
            'scd' => 'EPAYTEST', // Test merchant code
            'su' => route('registeredUser.payment.success', ['payment_id' => $payment->id]), // Pass the payment ID to success URL
            'fu' => route('registeredUser.payment.failed', ['payment_id' => $payment->id]), // Pass the payment ID to failed URL
        ]
    ]);

    // Redirect to eSewa's payment gateway
    return redirect()->to('https://uat.esewa.com.np/epay/main?' . http_build_query([
        'amt' => $amount,
        'pdc' => 0,
        'psc' => 0,
        'txAmt' => 0,
        'tAmt' => $amount,
        'pid' => $refId,
        'scd' => 'EPAYTEST', // Use test merchant code here
        'su' => route('registeredUser.payment.success', ['payment_id' => $payment->id]),
        'fu' => route('registeredUser.payment.failed', ['payment_id' => $payment->id]),
    ]));
}

public function success(Request $request)
{
    // Retrieve the payment using the payment ID from the request
    $payment = Payment::find($request->payment_id); // Assuming 'payment_id' is passed as a query parameter

    if ($payment) {
        // Update payment status to 1 (success)
        $payment->update([
            'payment_status' => 1,
            'payment_date' => now(),
        ]);

        toast('Payment completed successfully!', 'success');
    } else {
        toast('Payment not found.', 'error');
    }

    // Redirect to the dashboard
    return redirect()->route('registeredUser.dashboard');
}

public function failed(Request $request)
{
    // Retrieve the payment using the payment ID from the request
    $payment = Payment::find($request->payment_id); // Assuming 'payment_id' is passed as a query parameter

    if ($payment) {
        // Update payment status to 0 (failed)
        $payment->update([
            'payment_status' => 0,
            'payment_date' => now(), // Optional: Update payment date if necessary
        ]);

        toast('Payment failed, please try again.', 'warning');
    } else {
        toast('Payment not found.', 'error');
    }

    return redirect()->route('registeredUser.payment.index');
}

}
