<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="album py-5 bg-body-tertiary">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="bg-info p-3 rounded-3">
                        <div class="position-relative mb-5">
                        <h4 class="mb-4 position-absolute top-0 start-0">List Product</h4>
                        <div class="position-absolute top-0 end-0">
                        <a href="profile" type="button" class="btn btn-primary ">Lihat Profile</a>
                        <a href="merchant/input" type="button" class="btn btn-dark ">Tambah Produk</a>
                        <a href="/index" type="button" class="btn btn-secondary" >Kembali ke Produk</a>
                    </div>
                    </div>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($merchants as $merchant)
                                <tr class="table-secondary">
                                    <th scope="row">{{ $merchant->id }}</th>
                                    <td scope="col">{{ $merchant->Nama }}</td>
                                    <td scope="col">{{ $merchant->Stok }}</td>
                                    <td scope="col">{{ $merchant->Berat }}</td>
                                    <td scope="col">Rp. {{ $merchant->Harga }}</td>
                                    <td scope="col">
                                        @if($merchant->Kondisi == 'Baru')
                                            <p class="bg-primary text-light rounded-4 d-inline-block px-3 py-1">{{ $merchant->Kondisi }}</p>
                                        @elseif($merchant->Kondisi == 'Bekas')
                                            <p class="bg-dark text-light rounded-4 d-inline-block px-3 py-1">{{ $merchant->Kondisi }}</p>
                                        @else
                                            
                                        @endif
                                    </td>
                                    <td scope="col">
                                        <a href="{{ route('tampilan.update', ['id' => $merchant->id]) }}" type="button" class="btn btn-warning">Update</a>
                                        <a href="{{ route('tampilan.merch.delete', ['id' => $merchant->id]) }}" type="button" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>