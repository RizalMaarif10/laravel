<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
</head>
<body>
    <div class="text-center mb-3 mt-3">
        <a href="{{ route('tampilan.hasil') }}" class="btn btn-success">Kembali Ke Halaman Admin</a>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="border border-dark border-2 p-3">
                    @foreach ($admin as $admins)
                        
                    @endforeach
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Nama Akun</div>
                        <div class="col-4">{{$admins->nama_akun}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Email</div>
                        <div class="col-4">{{$admins->email}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Gender</div>
                        <div class="col-4">{{$admins->gender}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Umur</div>
                        <div class="col-4">{{$admins->umur}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Tanggal Lahir</div>
                        <div class="col-4">{{$admins->tgl_lahir}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Alamat</div>
                        <div class="col-8">{{$admins->alamat}}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="border border-dark border-2 p-3">
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Nama Toko</div>
                        <div class="col-4">{{$admins->toko->nama_toko}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Rate</div>
                        <div class="col-4">{{$admins->toko->rate}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold">Deskripsi</div>
                        <div class="col-4">{{$admins->toko->deskripsi}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
