<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use File;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.categories-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_categories';
        $gambar->move($tujuan_upload, $nama_gambar);

        Categories::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Categories::find($id);
        return view('categories.categories-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $category = Categories::find($id);

        if($request->hasFile('gambar')){

            File::delete('img_categories/'.$category->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_categories';
            $gambar->move($tujuan_upload, $nama_gambar);
            $category->gambar = $nama_gambar;
        }

        $category->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);

        return redirect('/categories');
    }

    public function delete($id)
    {
        $category = Categories::find($id);
        return view('categories.categories-hapus', compact('category'));
    }

    public function destroy($id)
    {
        $category = Categories::find($id);
        File::delete('img_categories/'.$category->gambar);
        $category->delete();
        return redirect('/categories');
    }
}
