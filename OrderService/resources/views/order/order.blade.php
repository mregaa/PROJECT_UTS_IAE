<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Produk</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    
    <form action="{{ route('beli') }}" method="POST">
        @csrf
        
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    
        <h1 class="mb-4">Checkout</h1>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
            <label for="nama" class="form-label">Alamat:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Alamat" required>
            <label for="nama" class="form-label">Telepon:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nomor Telepon" required>
        </div>
        
        <button type="submit" class="btn btn-success">Beli</button>
                </div>
            </div>
        </div>

    </form>
</div>

</body>
</html>
