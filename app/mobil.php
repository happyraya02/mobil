<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $fillable = [
        'kode_mobil', 'merk', 'type', 
        'warna', 'harga_mobil', 'gambar'];
    public $timestamps = true;

    public function kredit()
    {
        return $this->belongsTo('App\kredit', 'id_kredit');
    }
    public function user()
    {
        return $this->belongsTo('App\user', 'id_user');
    }
    public function beli_cash()
    {
        return $this->belongsToMany('App\beli_cash', 'id_beli_cash');
    }
    public function mobil()
    {
        return $this->belongsTo('App\mobil', 'id_mobil');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
