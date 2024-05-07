<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Admin;
use App\Models\Merchant;

class MerchantController extends Controller
{
    public function merchant()
    {
        $merchants = Merchant::all(); 
            return view('tampilan.merchant', compact('merchants'));
    }
    
             public function store(Request $request)
             {
                 $validatedData = $request->validate([
                     'nama' => 'required',
                     'berat' => 'required|numeric',
                     'harga' => 'required|numeric',
                     'stok' => 'required|numeric',
                     'gambar' => 'required',
                     'kondisi' => 'required',
                     'deskripsi' => 'required',
                 ], [
                     'nama.required' => 'Nama produk harus diisi.',
                     'berat.required' => 'Berat produk harus diisi.',
                     'berat.numeric' => 'Berat produk harus berupa angka.',
                    'harga.required' => 'Harga produk harus diisi.',
                     'harga.numeric' => 'Harga produk harus berupa angka.',
                     'stok.required' => 'Stok produk harus diisi.',
                     'stok.numeric' => 'Stok produk harus berupa angka.',
                     'kondisi.required' => 'Kondisi produk harus dipilih.',
                     'gambar.required' => 'Deskripsi produk harus diisi.',
                     'deskripsi.required' => 'Deskripsi produk harus diisi.',
                 ]);
                    $merchant = new Merchant();
            
                    $merchant->Nama = $request->nama;
                    $merchant->Harga = $request->harga;
                    $merchant->Stok = $request->stok;
                    $merchant->Berat = $request->berat;
                    $merchant->Gambar = $request->gambar; 
                    $merchant->Kondisi = $request->kondisi;
                    $merchant->Deskripsi = $request->deskripsi;
                    

                    $merchant->save();
                    $merchant = Merchant::all();
                    return view('tampilan.merchant')->with('merchants', $merchant);
                
         }
         public function delete($id)
         {
             Merchant::destroy($id);
             $merchants = Merchant::all(); 
             return view('tampilan.merchant', compact('merchants'));
        }
        public function update(Request $request, $id)
         {
            
             $validatedData = $request->validate([
                 'nama' => 'required|string',
                 'gambar' => 'required|string',
                 'berat' => 'required|numeric',
                 'harga' => 'required|numeric',
                 'stok' => 'required|numeric',
                 'kondisi' => 'required|string',
                 'deskripsi' => 'required|string',
             ]);
             $merchant = Merchant::find($id);
             $merchant->update($validatedData);     
             return redirect('/index/merchant');
         }
        
}
