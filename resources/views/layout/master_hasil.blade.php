<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="album py-5 bg-body-tertiary">
        <div class="container bg-info p-3">
            <div class="row">
                <div class="col-sm">
                    <a href="/index/admin" class="btn btn-primary mt-2" type="button">Halaman Pengguna 1</a>
                </div>
                <div class="col-sm">
                    <h3 class="text-center text-decoration-underline">Product</h3>
                </div>
                <div class="col-sm">
                    <a href="/index/merchant" class="btn btn-success mt-2 float-end" type="button">Halaman Pengguna 2</a>
                </div>
            </div>
        
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 g-3 p-3">
                @foreach($products as $product)
    <div class="col">
        <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="{{ $product->Gambar }}" alt="">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5>{{ $product->Nama }}</h5>
                    <h6 class="bg-success rounded">{{ $product->Kondisi}}</h6>
                </div>
                <div class="d-flex justify-content-between">
                    <h5 class="bg-success rounded">{{ $product->Stok }}</h5>
                    <h6 class="bg-info rounded">Rp. {{ $product->Harga }}</h6>
                    <h6 class="bg-info rounded">{{ $product->Berat }} gr</h6>
                </div>
                <p class="card-text">{{ $product->Deskripsi }}</p>
                <div class="d-grid gap-2 col-8 mx-auto">
                    <button type="button" class="btn btn-primary">Pesan Sekarang</button>
                </div>
            </div>
        </div>
       
        <div class="card shadow-sm mt-3">
            <img class="bd-placeholder-img card-img-top" src="{{ $product->merchant->Gambar }}" alt="">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5>{{ $product->merchant->Nama }}</h5>
                    <h6 class="bg-success rounded">{{ $product->merchant->Kondisi}}</h6>
                </div>
                <div class="d-flex justify-content-between">
                    <h5 class="bg-success rounded">{{ $product->merchant->Stok }}</h5>
                    <h6 class="bg-info rounded">Rp. {{ $product->merchant->Harga }}</h6>
                    <h6 class="bg-info rounded">{{ $product->merchant->Berat }} gr</h6>
                </div>
                <p class="card-text">{{ $product->merchant->Deskripsi }}</p>
                <div class="d-grid gap-2 col-8 mx-auto">
                    <button type="button" class="btn btn-primary">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
                        </div>
                    </div>
                </div>
</body>
</html>
