<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jnsKendaraan extends Model
{
    use HasFactory;
    protected $table = 'jnskendaraan';
    protected $primaryKey = 'id_jns_kendaraan';
    public $timestamps = false;

    protected $fillable = [
        'id_jns_kendaraan',
        'nm_jns_kendaraan ',
    ];
}
