<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kredit;
use Session;
use Auth;

class KreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kredit = kredit::all();
        return view('admin.kredit.index', compact('kredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kredit = kredit::all();
        return view('admin.kredit.create', compact('kredit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kredit = new kredit();
        $kredit->kode_kredit = $request->kode_kredit;
        $kredit->KTP = $request->KTP;
        $kredit->kode_paket = $request->kode_paket;
        $kredit->kode_mobil = $request->kode_mobil;
        $kredit->tgl_kredit = $request->tgl_kredit;
        $kredit->save();
        $response = [
            'success' => true,
            'data' => $kredit,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('kredit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kredit = kredit::findOrFail($id);
        return view('admin.kredit.show', compact('kredit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kredit = kredit::findOrFail($id);
        return view('admin.kredit.edit', compact('kredit'));
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
        //     'nama_kredit' => 'required',
        // ]);
        $kredit = kredit::findOrFail($id);
        $kredit->kode_kredit = $request->kode_kredit;
        $kredit->KTP = $request->KTP;
        $kredit->kode_paket = $request->kode_paket;
        $kredit->kode_mobil = $request->kode_mobil;
        $kredit->tgl_kredit = $request->tgl_kredit;
        $kredit->save();
        $response = [
            'success' => true,
            'data' => $kredit,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('kredit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kredit = kredit::findOrfail($id);
        if(!kredit::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $kredit->kredit."</b>"
        ]);
        return redirect()->route('kredit.index');
    }
}
