<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Katspec;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if( $jdl = $request->get('judul')=='pemasukan'){
            return view('inputMasterJenisPemasukan');
        }
        else{
            return view('inputMasterJenisPengeluaran');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mKategori = $request->get('kategori');
        $ckat = $request->get('cKategori');
        $keterangan = $request->get('keterangan');
        $userid = $request->get('userid');
        
        $newPage = new Kategori;
        $newPage->name = $mKategori;
        $newPage->keterangan = $konten;
        $newPage->userid = $userid;

        $newPage->save();



        //get new id from last save
        //$newid = bla bla bla
        foreach ($ckat as $value) {
            $newChild = new Katspec;
            $newChild->name = $value;
            $newChild->katid = $newPage->id;

            $newChild->save();
        }
        
        

        return redirect('pages1');//ganti redirect
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
    }
}
