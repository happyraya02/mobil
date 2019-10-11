<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;
use File;
use Session;
use Auth;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = mobil::all();
        return view('admin.mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = mobil::all();
        return view('admin.mobil.create', compact('mobil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $mobil = new mobil();
        $mobil->kode_mobil = $request->kode_mobil;
        $mobil->merk = $request->merk;
        $mobil->type = $request->type;
        $mobil->warna = $request->warna;
        $mobil->harga_mobil = $request->harga_mobil;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $Path = public_path() . '/assets/img/mobil/';
            $filename = '_' . $file->getClientOriginalName();
            $upload = $file->move($Path, $filename);
            $mobil->gambar = $filename;
        }

        $mobil->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                . $mobil->judul . "</b>"
        ]);
        return redirect()->route('mobil.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = mobil::findOrFail($id);
        return view('admin.mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = mobil::findOrFail($id);
        return view('admin.edit', compact('edit'));
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

        // $this->validate($request, [
        //     'kode_mobil' => 'required',
        //     'merk' => 'required',
        //     'type' => 'required',
        //     'warna' => 'required',
        //     'harga_mobil' => 'required',
        //     'gambar' => 'required|mimes:jpeg.jpg.png.gif|required|max:2048',
        // ]);


        $mobil = mobil::findOrFail($id);
        $mobil->kode_mobil = $request->kode_mobil;
        $mobil->merk = $request->merk;
        $mobil->type = $request->type;
        $mobil->warna = $request->warna;
        $mobil->harga_mobil = $request->harga_mobil;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path() . '/assets/img/mobil/';
            $filename = '_' . '/assets/img/mobil/';
            $upload = $file->move($destinationPath, $filename);
        }

        if ($mobil->gambar) {
            $old_gambar = $mobil->gambar;
            $filepath = public_path() . '/assets/img/' . $mobil->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }

            $mobil->save();
            Session::flash("flash_notification", [
                "level" => "primary",
                "message" => "Berhasil mengubah data mobil berjudul <b>$mobil->judul</b>!"
            ]);
            return redirect()->route('mobil.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = mobil::findOrFail($id);
        if ($mobil->gambar) {
            $old_gambar = $mobil->gambar;
            $filepath = public_path() . '/assets/img/mobil/' . $mobil->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $mobil->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data mobil berjudul <b>$mobil->judul</b>!"
        ]);
        return redirect()->route('mobil.index');
    }
}
