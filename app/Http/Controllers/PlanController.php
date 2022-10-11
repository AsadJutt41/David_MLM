<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Srmklive\PayPal\Facades\PayPal;
use Session;
use Stripe;
use Srmklive\PayPal\Services\ExpressCheckout;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('user.dashboard.plan.plan', compact('plans'));
    }
    public function planSubmit(Request $request)
    {
        $request->validate([
            'plan' => 'required',
            'method' => 'required',
        ]);
        if ($request->method == 'paypal') {
            return redirect()->route('dashboard.payment.paypal');
        } elseif ($request->method == 'stripe') {
            return view('user.dashboard.plan.stripe')->with([
                'amount' => $request->amount,
                'currency' => $request->currency,
            ]);
        } else {
            return back('error', 'something went wrong');
        }
    }

    /***** PayPal Payment *****/
    public function payment()
    {
        $data = [];
        $data['items'] = [
            [
                'name' => 'AsadJutt',
                'price' => 100,
                'desc'  => 'Description for asadbala41',
                'qty' => 1
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('dashboard.payment.success');
        $data['cancel_url'] = route('dashboard.payment.cancel');
        $data['total'] = 100;

        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data, true);

        return redirect($response['paypal_link']);
    }
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
    public function success(Request $request)
    {
        $response = $provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successfully. You can create success page here.');
        }

        dd('Something is wrong.');
    }

    /***** Strip Payment *****/

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);
        return back()->with('success', 'Payment has been successfully processed.');
    }
}
