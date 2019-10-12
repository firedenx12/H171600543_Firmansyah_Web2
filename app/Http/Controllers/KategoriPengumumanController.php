<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
        $kategoriPengumuman = KategoriPengumuman::all();
        return view ('kategori_pengumuman.index',compact('kategoriPengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori_pengumuman.create');
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
        KategoriPengumuman::create($input);
        return redirect(route('kategori_pengumuman.index'));
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
        $kategoriPengumuman = KategoriPengumuman::find($id);
        return view ('kategori_pengumuman.show',compact('kategoriPengumuman'));
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
        $kategoriPengumuman = KategoriPengumuman::find($id);
        if (empty($kategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

        return view ('kategori_pengumuman.edit',compact('kategoriPengumuman'));
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
        $kategoriPengumuman = KategoriPengumuman::find($id);
        $input = $request->all();
        if (empty($kategoriPengumuman)){
            return redirect(route('kategori_engumuman.index'));
        }
        $kategoriPengumuman->update($input);
        return redirect(route('kategori_pengumuman.index'));

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
        $kategoriPengumuman = KategoriPengumuman::find($id);
        if (empty($kategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }
         $kategoriPengumuman->delete();
         return redirect(route('kategori_pengumuman.index'));
    }
}
