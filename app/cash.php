<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cash extends Model
{
    protected $fillable = [
        'kode_cash', 'KTP', 
        'kode_mobil', 'cash_tgl',
        'cash_bayar'];
    public $timestamps = true;

    public function pembeli()
    {
        return $this->belongsTo('App\pembeli', 'id_pembeli');
    }
    public function user()
    {
        return $this->belongsTo('App\user', 'id_user');
    }
    public function mobil()
    {
        return $this->belongsToMany('App\mobil', 'id_mobil');
    }
    public function beli_cash()
    {
        return $this->belongsTo('App\beli_cash', 'id_beli_cash');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
