<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $fillable = [
        'KTP', 'nama_pembeli', 
        'alamat_pembeli', 'telp_pembeli',];
    public $timestamps = true;

}
