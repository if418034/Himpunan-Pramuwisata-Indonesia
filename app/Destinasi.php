<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $table ='destinasi';
    protected $fillable=['nama','lokasi','gambar','deskripsi','konten'];

}
