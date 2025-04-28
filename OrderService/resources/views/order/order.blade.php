<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    
    <form action="/orders" method="POST">
        @csrf
        
        <div class="container mt-5">    
            <div class="row justify-content-center">
                <div class="col-md-6">
                    
        <h1 class="mb-4">Checkout</h1>
        <h3 class="mb-4">Data Customer</h3>
        <div class="mb-3">
            <input type="hidden" name="car_id" value="{{ $car['id'] }}">
            <input type="hidden" name="car_name" value="{{ $car['name'] }}">
            <input type="hidden" name="brand" value="{{ $car['brand'] }}">
            <input type="hidden" name="amount" value="{{ $car['price'] }}">
            <input type="hidden" name="user_id" value="{{ $user['id'] }}">

            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama" required>
            <label for="nama" class="form-label">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
            <label for="nama" class="form-label">Telepon:</label>
            <input type="text" name="telp" id="telp" class="form-control" placeholder="Masukkan Nomor Telepon" required>
        </div>
        
        <button type="submit" class="btn btn-success">Beli</button>
                </div>
            </div>
        </div>

    </form>
</div>

</body>
</html>
