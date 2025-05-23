<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran - Cafe Coffee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .bg-coffee-500 {
    background-color: #6F4E37;
    }

    .bg-coffee-600 {
        background-color: #5D4037;
    }

    .bg-coffee-700 {
        background-color: #4E342E;
    }

    .text-coffee-500 {
        color: #6F4E37;
    }

    .text-coffee-600 {
        color: #5D4037;
    }

    .text-coffee-700 {
        color: #4E342E;
    }

    .border-coffee-500 {
        border-color: #6F4E37;
    }

    .hover\:bg-coffee-700:hover {
        background-color: #4E342E;
    }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-coffee-500 py-4 px-6">
                <h1 class="text-2xl font-bold text-white">Payment Method</h1>
            </div>
            
            <div class="p-6">
                <div class="mb-6">
                    <h2 class="text-lg font-semibold mb-2">Order Summary</h2>
                    <p class="text-gray-600">Order ID: {{ $payment->order_id }}</p>
                    <p class="text-gray-600">Customer Name: {{ $payment->name }}</p>
                    <p class="text-gray-600">Total Amount: Rp {{ number_format($payment->amount, 0, ',', '.') }}</p>
                </div>
                
                <form id="paymentForm" action="{{ route('payment.confirm', ['order_id' => $payment->order_id]) }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold mb-4">Select Payment Method</h2>
                        
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input type="radio" id="Debit Card" name="method" value="Debit Card" class="h-4 w-4 text-coffee-600 focus:ring-coffee-500" checked>
                                <label for="Debit Card" class="ml-3 block text-gray-700">
                                    <span class="font-medium">Debit Card</span>
                                </label>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="radio" id="Credit Card" name="method" value="Credit Card" class="h-4 w-4 text-coffee-600 focus:ring-coffee-500">
                                <label for="Credit Card" class="ml-3 block text-gray-700">
                                    <span class="font-medium">Credit Card</span>
                                </label>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="radio" id="bankTransfer" name="method" value="bank_transfer" class="h-4 w-4 text-coffee-600 focus:ring-coffee-500">
                                <label for="bankTransfer" class="ml-3 block text-gray-700">
                                    <span class="font-medium">Bank Transfer</span>
                                </label>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="radio" id="cash" name="method" value="cash" class="h-4 w-4 text-coffee-600 focus:ring-coffee-500">
                                <label for="cash" class="ml-3 block text-gray-700">
                                    <span class="font-medium">Cash</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <button type="submit" class="w-full bg-coffee-600 hover:bg-coffee-700 text-white font-bold py-3 px-4 rounded-md transition duration-300">
                            Confirm Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>