<?php

namespace App\Http\Controllers;


use App\Models\Booking;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $payments = Payment::all();
        return view('payment.show_payments', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $booking=Booking::where('user_id', Auth::id())->get();
        // dd($booking);
        return view('front.payment');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        $booking=Booking::where('user_id', Auth::id())->get();
        dd($booking);
            $url = "https://eu-test.oppwa.com/v1/payments";
            $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                        "&amount=92.00" .
                        "&currency=EUR" .
                        "&paymentBrand=VISA" .
                        "&paymentType=DB" .
                        "&card.number=4200000000000000" .
                        "&card.holder=Jane Jones" .
                        "&card.expiryMonth=05" .
                        "&card.expiryYear=2034" .
                        "&card.cvv=123";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                           'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseData = curl_exec($ch);
            if(curl_errno($ch)) {
                return curl_error($ch);
            }
            curl_close($ch);
            return $responseData;

        $responseData = request();
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
