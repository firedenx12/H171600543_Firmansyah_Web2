<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriArtikel = KategoriArtikel::all();
        return view ('kategori_artikel.index',compact('kategoriArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori_artikel.create');
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
        KategoriArtikel::create($input);
        return redirect(route('kategori_artikel.index'));
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
        $kategoriArtikel = KategoriArtikel::find($id);
        return view ('kategori_artikel.show',compact('kategoriArtikel'));
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
        $kategoriArtikel = KategoriArtikel::find($id);
        if (empty($kategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

        return view ('kategori_artikel.edit')->with('data',$kategoriArtikel);
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
        $kategoriArtikel = KategoriArtikel::find($id);
        $input = $request->all();
        if (empty($kategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }
        $kategoriArtikel->update($input);
        return redirect(route('kategori_artikel.index'));

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
        $kategoriArtikel = KategoriArtikel::find($id);
        if (empty($kategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }
         $kategoriArtikel->delete();
         return redirect(route('kategori_artikel.index'));
    }
}
