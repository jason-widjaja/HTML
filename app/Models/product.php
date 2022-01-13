<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table="produk";
    public $primaryKey = "kode_produk";
    public $incrementing = false;
    public $timestamps = false;
}
