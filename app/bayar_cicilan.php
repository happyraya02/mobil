<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bayar_cicilan extends Model
{
    protected $fillable = [
        'kode_cicilan', 'kredits_id', 
        'tgl_cicilan', 'jumlah_cicilan',
        'cicilan_ke', 'cicilan_sisa_ke', 
        'cicilan_sisa_harga'];
    public $timestamps = true;

}
