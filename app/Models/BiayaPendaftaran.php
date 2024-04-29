<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaPendaftaran extends Model
{
    use HasFactory;
    protected $table = 'tb_biaya_pendaftaran';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;
}
