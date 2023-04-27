<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create(){

        return view('createbarang');
    }

    public function messages(){
        return[
            'KategoriBarang.required' => 'Harus Diisi! Tidak boleh ada angka!',
            'NamaBarang.required' => 'Minimal 5 huruf, Maksimal 80 huruf!',
            'HargaBarang.required' => 'Harus Diisi!',
            'JumlahBarang.required' => 'Harus Diisi!'
        ];
    }

    public function store(Request $request){

        $validated = $request->validate([
            'KategoriBarang' => 'required|alpha',
            'NamaBarang' => 'required|min:5|max:80|alpha',
            'HargaBarang' => 'required|integer',
            'JumlahBarang' => 'required|integer',
        ]);

        $extension = $request->file('Foto')->getClientOriginalExtension();
        $filename = $request->NamaBarang.'.'.$extension;
        $request->file('Foto')->storeAs('/public/Foto/', $filename);

        Barang::create([
            'KategoriBarang'=> $request->KategoriBarang,
            'NamaBarang'=> $request->NamaBarang,
            'HargaBarang' => $request->HargaBarang,
            'JumlahBarang' => $request->JumlahBarang,
            'Foto' => $filename
        ]);

        return redirect('/');
    }

    public function index(){
        $barang = Barang::all();
    
        return view('home', ['barang' => $barang]);
    }

    public function show($id){
        $barang = Barang::findOrFail($id);

        return view('detail', ['barang' => $barang]);
    }

    public function edit($id){
        $barang = Barang::findOrFail($id);

        return view('editbarang', ['barang' => $barang]);
    }

    public function update (Request $request, $id){

        $validated = $request->validate([
            'KategoriBarang' => 'required|alpha',
            'NamaBarang' => 'required|min:5|max:80|alpha',
            'HargaBarang' => 'required|integer',
            'JumlahBarang' => 'required|integer'
        ]);

        Barang::findorFail($id)->update([
            'KategoriBarang'=> $request->KategoriBarang,
            'NamaBarang'=> $request->NamaBarang,
            'HargaBarang' => $request->HargaBarang,
            'JumlahBarang' => $request->JumlahBarang
        ]);

        return redirect('/');
    }

    public function delete($id){
        Barang::destroy($id);

        return redirect('/');
    }
}
