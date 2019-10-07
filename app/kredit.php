<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kredit extends Model
{
    protected $fillable = [
        'kode_kredit', 'KTP', 'kode_paket', 'kode_mobil',
        'tgl_kredit'];
    public $timestamps = true;

    public function bayar_cicilan()
    {
        return $this->belongsTo('App\bayar_cicilan', 'id_bayar_cicilan');
    }
    public function user()
    {
        return $this->belongsTo('App\user', 'id_user');
    }
    public function paket_kredit()
    {
        return $this->belongsToMany('App\paket_kredit', 'id_paket_kredit');
    }
    public function kredit()
    {
        return $this->belongsTo('App\kredit', 'id_kredit');
    }

}
