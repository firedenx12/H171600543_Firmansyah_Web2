<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriGaleri = KategoriGaleri::all();
        return view ('kategori_galeri.index',compact('kategoriGaleri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori_galeri.create');
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
        KategoriGaleri::create($input);
        return redirect(route('kategori_galeri.index'));
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
        $kategoriGaleri = KategoriGaleri::find($id);
        return view ('kategori_galeri.show',compact('kategoriGaleri'));
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
        $kategoriGaleri = KategoriGaleri::find($id);
        if (empty($kategoriGaleri)){
            return redirect(route('kategori_galeri.index'));
        }

        return view ('kategori_galeri.edit',compact('kategoriGaleri'));
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
        $kategoriGaleri = KategoriGaleri::find($id);
        $input = $request->all();
        if (empty($kategoriGaleri)){
            return redirect(route('kategori_galeri.index'));
        }
        $kategoriGaleri->update($input);
        return redirect(route('kategori_galeri.index'));

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
        $kategoriGaleri = KategoriGaleri::find($id);
        if (empty($kategoriGaleri)){
            return redirect(route('kategori_galeri.index'));
        }
         $kategoriGaleri->delete();
         return redirect(route('kategori_galeri.index'));
    }
}
