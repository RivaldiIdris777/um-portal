<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPLDokumen extends Model
{
    use HasFactory;
    protected $table = 'tb_rpldokumen';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;

}
