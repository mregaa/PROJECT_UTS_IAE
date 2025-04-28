<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Orders;

class OrderController extends Controller
{
    public function show($id)
    {
        $order = Orders::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json($order);
    }

    public function store(Request $request)
    {
        $car = Http::get("http://localhost:8001/api/cars/" . $request->car_id)->json();

        if (!$car) {
            return response()->json(['error' => 'Car not found'], 404);
        }
        
        $order = Orders::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'brand' => $request->brand,
            'amount' => $request->amount,
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'car_name' => $request->car_name,
            'status' => 'created'
        ]);

        return redirect("http://localhost:8003/payment/{$order->id}");

    }
    public function createForm($car_id)
    {
        $car = Http::get("http://localhost:8001/api/cars/{$car_id}");
        $user = Http::get("http://localhost:8000/api/users/1");
        
        return view('order.order', compact('car','user'));
    }
}
