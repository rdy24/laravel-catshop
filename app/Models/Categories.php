<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'tb_categories';
    protected $primaryKey = 'id_categories';
    public $incrementing = true;
    protected $fillable = ['nama', 'harga', 'gambar'];
    public $timestamps = false;
}
