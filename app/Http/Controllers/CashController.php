<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;
use App\cash;
use Session;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\Jobs\SyncJob;

class CashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cash = cash::all();
        return view('admin.cash.index', compact('cash'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cash = cash::all();
        return view('admin.cash.create', compact('cash'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cash = new cash();
        $cash->kode_cash = $request->kode_cash;
        $cash->KTP = $request->KTP;
        $cash->kode_mobil = $request->kode_mobil;
        $cash->cash_tgl = $request->cash_tgl;
        $cash->cash_bayar = $request->cash_bayar;
        $cash->save();
        $response = [
            'success' => true,
            'data' => $cash,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('cash.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cash = cash::findOrFail($id);
        return view('admin.cash.show', compact('cash'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cash = cash::findOrFail($id);
        return view('admin.cash.edit', compact('cash'));
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
        //     'nama_cash' => 'required',
        // ]);
        $cash = cash::findOrFail($id);
        $cash->kode_cash = $request->kode_cash;
        $cash->KTP = $request->KTP;
        $cash->kode_mobil = $request->kode_mobil;
        $cash->cash_tgl = $request->cash_tgl;
        $cash->cash_bayar = $request->cash_bayar;
        $cash->save();
        $response = [
            'success' => true,
            'data' => $cash,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('cash.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cash = cash::findOrfail($id);
        if(!cash::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $cash->cash."</b>"
        ]);
        return redirect()->route('cash.index');
    }
}
