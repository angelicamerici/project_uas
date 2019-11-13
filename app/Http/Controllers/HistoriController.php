<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Histori;
use App\Historikat;
class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $kategoris = Histori::join('kategoris', 'katid', '=', 'kategoris.id')
        //     ->select('historis.*', 'kategoris.name as katname')
        //     ->get();
        //    return view('dashboard', ['kategoris' => $kategoris]);
        $userid = Auth::id();
        $histori = Histori::where('user_id',$userid)->get();
        foreach ($histori as $value) {
            $kat = $value->kategori->name;
            $value->kategori_id = $kat;
            $saldo = $value->user->saldo;
            $value->user_id=$saldo;
            if($value->katspec_id!==null){
                $katsp = $value->katspec->name;
                $value->katspec_id = $katsp;
            }
        }
        //dd($histori);
        return view('dashboard', ['histori' => $histori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->is('pemasukan/*')) {
            return view('inputPemasukan');
        }
        elseif ($request->is('pengeluaran/*')) {
            return view('inputPengeluaran');
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
        $katid = $request->get('katid');
        $nominal = $request->get('nominal');
        $keterangan = $request->get('keterangan');
        $kc = $request->get('katcid');
        $userid = Auth::id();
        
        $newPage = new Histori;
        $newPage->nominal = $nominal;
        $newPage->keterangan = $keterangan;
        $newPage->user_id = $userid;
        $newPage->kategori_id =$katid;
        $newPage->katspec_id=$kc;

        $newPage->save();

        $user = User::where('id',$user_id);
        $user->saldo = (int)$user->saldo - (int)$nominal;
        $user->save();
        //belum update saldo
        return redirect('/');
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
