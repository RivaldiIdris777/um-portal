<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanduanPendaftaran extends Model
{
    use HasFactory;
    protected $table = 'tb_panduan_pendaftaran';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;
}
