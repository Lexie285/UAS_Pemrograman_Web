<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailService extends Model
{
    use HasFactory;
    protected $table = 'detail_service';

    protected $fillable = [
        'id',
        'sparepart',
        'harga',
    ];
}