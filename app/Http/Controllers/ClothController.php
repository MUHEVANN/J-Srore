<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\cloth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClothController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = cloth::orderBy('id', 'asc')->get();
        return view('home.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('home.create',['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "foto"=>'required|mimes:jpeg,jpg,png',
            "nama"=>'required',
            "harga"=>'required',
            "category_id"=>'required',
            "stock"=>'required|numeric',
        ],[
            'foto.required'=> "nama wajib diisi",
            'nama.required'=> "nama wajib diisi",
            'harga.required'=> "harga wajib diisi",
            'category_id.required'=> "category_id wajib diisi",
            'stock.required'=> "stok wajib diisi",
            'foto.mimes'=> "foto harus jpeg/jpg/png",
        ]);
        $foto_file = $request->file('foto');
        $foto_extentions = $foto_file->extension();
        $foto_name = date('ymdhis').".".$foto_extentions;
        $foto_file->move(public_path('foto'),$foto_name);
        $data = [
            "gender" => $request->gender,
            "foto"=> $foto_name,
            "nama" => $request->nama,
            "harga"=>$request->harga,
            "category_id"=>$request->category_id,
            "stock"=>$request->stock,
            "desc"=>$request->desc,
        ];

        cloth::create($data);
        return redirect()->to('home')->with("success", "berhasil menambahkan product ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = cloth::where('id',$id)->first();
        return view('home.detail')->with('data',$data);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = cloth::where('id',$id)->first();
        $category = Category::all();
        return view('home.edit')->with(['data'=>$data, "category"=>$category]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nama"=>'required',
            "harga"=>'required',
            "category_id"=>'required',
            "stock"=>'required|numeric',
        ],[
            'nama.required'=> "nama wajib diisi",
            'harga.required'=> "harga wajib diisi",
            'category_id.required'=> "category_id wajib diisi",
            'stock.required'=> "stok wajib diisi",
        ]);
        $data = [
            "gender"=>$request->gender,
            "nama" => $request->nama,
            "harga"=>$request->harga,
            "category_id"=>$request->category_id,
            "stock"=>$request->stock,
        ];
        if($request->hasFile('foto')){
            $data_file = $request->file('foto');
            $data_extension = $data_file->getExtension();
            $data_name = date('ymdhis').".".$data_extension;
            $data_file->move(public_path('foto'),$data_name);
            
            $data_foto =  cloth::where('id',$id)->first();
            File::delete(public_path('foto/'.$data_foto->foto));

            $data = [
                "foto" => $data_name
            ];
        }
        cloth::where('id',$id)->update($data);
        return redirect()->to('all-product')->with("success", "update product success ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = cloth::where('id',$id)->first();
        File::delete(public_path('foto/'.$data->foto));
        cloth::where('id',$id)->delete();
        return redirect()->to('all-product')->with('success',"bserhasil dihapus");
    }
}