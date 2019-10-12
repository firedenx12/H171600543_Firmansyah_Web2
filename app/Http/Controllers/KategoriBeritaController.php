<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        //
        $kategoriBerita = KategoriBerita::all();
        return view ('kategori_berita.index',compact('kategoriBerita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori_berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        KategoriBerita::create($input);
        return redirect(route('kategori_berita.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kategoriBerita= KategoriBerita::find($id);
        return view ('kategori_berita.show',compact('kategoriBerita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategoriBerita = KategoriBerita::find($id);
        if (empty($kategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }

        return view ('kategori_berita.edit',compact('kategoriBerita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kategoriBerita = KategoriBerita::find($id);
        $input = $request->all();
        if (empty($kategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }
        $kategoriBerita->update($input);
        return redirect(route('kategori_berita.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kategoriBerita = KategoriBerita::find($id);
        if (empty($kategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }
         $kategoriBerita->delete();
         return redirect(route('kategori_berita.index'));
    }
}
