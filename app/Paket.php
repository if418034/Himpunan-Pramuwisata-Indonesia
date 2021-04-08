<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table ='paket';
    protected $fillable=['nama','kategori','gokasi','harga','gambar','deskripsi','konten'];
}
