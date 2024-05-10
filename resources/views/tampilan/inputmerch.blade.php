<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  

<form action="{{ route('tampilan.merchant') }}" method="POST" >
  @csrf
  
  <div class="album py-5 bg-body-tertiary">
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="bg-info p-3 rounded-3">
            <h4 class="text-center mb-4">Tambah Data Produk</h4>
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" class="form-control form-control-sm mb-2 @error('nama') is-invalid @enderror" id="nama" name="nama" 
                 placeholder="Masukan nama produk" >
                 @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="berat">Gambar</label>
              <input type="file" class="form-control form-control-sm mb-2 @error('gambar') is-invalid @enderror" id="gambar" name="gambar" 
                placeholder="Masukan berat produk"/>
                @error('gambar')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="berat">Berat</label>
              <input type="number" class="form-control form-control-sm mb-2 @error('berat') is-invalid @enderror" id="berat" name="berat" placeholder="Masukan berat produk"/>
              @error('berat')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="number"  class="form-control form-control-sm mb-2  @error('harga') is-invalid @enderror" id="harga" name="harga"
                placeholder="Masukan harga produk" />
                @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
              <label for="stok">Stok</label>
              <input type="number" class="form-control form-control-sm mb-2  @error('stok') is-invalid @enderror" id="stok" name="stok"
                placeholder="Masukan stok produk" />
                @error('stok')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div>
            <label for="kondisi">Kondisi</label>
            <select class="form-select mb-2  @error('kondisi') is-invalid @enderror" name="kondisi" id="kondisi" aria-label="Default select example" >
              <option disabled selected>Pilih Kondisi Barang</option>
              <option value="Baru">Baru</option>
              <option value="Bekas">Bekas</option>
            </select>
            @error('kondisi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
            <div class="mb-3">
              <label for="deskripisi" class="form-label" >Deskripsi</label>
              <textarea class="form-control  @error('deskripsi') is-invalid @enderror" id="deskripisi" name="deskripsi"
                placeholder="Masukan deskripsi produk yang akan dijual"  rows="3"></textarea>
                @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div class="text-center">
              <div class="d-grid gap-2 col-8 mx-auto">
                <button class="btn btn-primary">Pesan Sekarang</button>
                <a href="/index/merchant" type="button" class="btn btn-warning">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>