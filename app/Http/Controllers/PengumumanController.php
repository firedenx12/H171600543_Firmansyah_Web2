<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Pengumuman = Pengumuman::all();
        return view ('pengumuman.index',compact('Pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $kategoriPengumuman = KategoriPengumuman::pluck('nama','id');
        //
        return view('pengumuman.create',compact('kategoriPengumuman'));
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
        Pengumuman::create($input);
        return redirect(route('pengumuman.index'));
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
        $Pengumuman = Pengumuman::find($id);
        return view ('pengumuman.show',compact('Pengumuman'));
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
        $Pengumuman = Pengumuman::find($id);
        $KategoriPengumuman = KategoriPengumuman::pluck('nama','id');
        if (empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }

        return view ('pengumuman.edit',compact('Pengumuman','KategoriPengumuman'));
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
        $Pengumuman = Pengumuman::find($id);
        $input = $request->all();
        if (empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }
        $Pengumuman->update($input);
        return redirect(route('pengumuman.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Pengumuman = Pengumuman::find($id);
        if (empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }
         $Pengumuman->delete();
         return redirect(route('pengumuman.index'));
    }
}
