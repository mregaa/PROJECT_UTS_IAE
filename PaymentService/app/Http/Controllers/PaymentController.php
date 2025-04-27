<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private $payments = [
        ['id' => 1, 'order_id' => 1, 'method' => 'transfer', 'status' => 'paid'],
        ['id' => 2, 'order_id' => 2, 'method' => 'credit', 'status' => 'unpaid']
    ];

    public function index()
    {
        return response()->json($this->payments);
    }

    public function show($id)
    {
        $payment = collect($this->payments)->firstWhere('id', $id);
        if (!$payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }
        return response()->json($payment);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'order_id' => 'required|integer',
            'method' => 'required|string',
            'status' => 'required|string'
        ]);

        // Simulasi tambah data baru
        $data['id'] = count($this->payments) + 1;

        return response()->json([
            'message' => 'Payment created successfully',
            'data' => $data
        ], 201);
    }

    public function viewPayments()
    {
        $payments = $this->payments;
        return view('payments.index', compact('payments'));
    }
}

