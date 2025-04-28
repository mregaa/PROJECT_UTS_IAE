<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $payment = Payment::create([
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'order_id' => $request->order_id,
            'amount' => $request->amount,
            'method' => $request->method,
            'status' => 'pending',
        ]);

        return response()->json([
            'message' => 'Payment created successfully',
            'data' => $payment
        ], 201);
    }

    public function show(string $id)
    {
        $payment = Payment::find($id);
        
        if (!$payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }
        
        return response()->json([
            'data' => $payment
        ]);
    }

    public function viewPayments($order_id): View
    {
        $order = Http::get("http://localhost:8002/api/orders/" . $order_id)->json();
        $payment = Payment::firstOrCreate(
            ['order_id' => $order['id'], 'name' => $order['name']],
            ['amount' => $order['amount'], 'status' => 'pending']
        );

        return view('payment.index', compact('order', 'payment'));
    }

    public function processPayment(Request $request, $order_id)
    {
        $payment = Payment::where('order_id', $order_id)->firstOrFail();
        
        $payment->update([
            'method' => $request->method,
            'status' => 'completed',
            'transaction_id' => 'PMBL-' . uniqid(),
        ]);

        return redirect()->route('payments.review', ['order_id' => $order_id]);
    }

    public function showReviewPage($order_id): View
    {
        $response = Http::get("http://localhost:8002/api/orders/" . $order_id);
        $order = $response->object();
        $payment = Payment::where('order_id', $order_id)->firstOrFail();

        return view('payment.review', compact('order', 'payment'));
    }
}