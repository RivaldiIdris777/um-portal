<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPLBiayaPendaftaran extends Model
{
    use HasFactory;
    protected $table = 'tb_rplbiayapendaftaran';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;
}
