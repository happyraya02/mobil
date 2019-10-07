<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bayar_cicilan;
use Session;
use Auth;

class BayarcicilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayar_cicilan = bayar_cicilan::all();
        return view('admin.bayar_cicilan.index', compact('bayar_cicilan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bayar_cicilan = bayar_cicilan::all();
        return view('admin.bayar_cicilan.create', compact('bayar_cicilan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bayar_cicilan = new bayar_cicilan();
        $bayar_cicilan->kode_cicilan = $request->kode_cicilan;
        $bayar_cicilan->kode_kredit = $request->kode_kredit;
        $bayar_cicilan->tgl_cicilan = $request->tgl_cicilan;
        $bayar_cicilan->jumlah_cicilan = $request->jumlah_cicilan;
        $bayar_cicilan->cicilan_ke = $request->cicilan_ke;
        $bayar_cicilan->cicilan_sisa_ke = $request->cicilan_sisa_ke;
        $bayar_cicilan->cicilan_sisa_harga = $request->cicilan_sisa_harga;
        $bayar_cicilan->save();
        $response = [
            'success' => true,
            'data' => $bayar_cicilan,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('bayar_cicilan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bayar_cicilan = bayar_cicilan::findOrFail($id);
        return view('admin.bayar_cicilan.show', compact('bayar_cicilan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bayar_cicilan = bayar_cicilan::findOrFail($id);
        return view('admin.bayar_cicilan.edit', compact('bayar_cicilan'));
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
        // $request->validate([
        //     'nama_bayar_cicilan' => 'required',
        // ]);
        $bayar_cicilan = new bayar_cicilan();
        $bayar_cicilan->kode_cicilan = $request->kode_cicilan;
        $bayar_cicilan->kode_kredit = $request->kode_kredit;
        $bayar_cicilan->tgl_cicilan = $request->tgl_cicilan;
        $bayar_cicilan->jumlah_cicilan = $request->jumlah_cicilan;
        $bayar_cicilan->cicilan_ke = $request->cicilan_ke;
        $bayar_cicilan->cicilan_sisa_ke = $request->cicilan_sisa_ke;
        $bayar_cicilan->cicilan_sisa_harga = $request->cicilan_sisa_harga;
        $bayar_cicilan->save();
        $response = [
            'success' => true,
            'data' => $bayar_cicilan,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('bayar_cicilan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bayar_cicilan = bayar_cicilan::findOrfail($id);
        if(!bayar_cicilan::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $bayar_cicilan->bayar_cicilan."</b>"
        ]);
        return redirect()->route('bayar_cicilan.index');
    }
}
