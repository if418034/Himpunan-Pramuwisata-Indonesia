<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table ='booking';
    protected $fillable=['nama','waktu','jenis','jumlah','kontak','catatan','status'];

}
