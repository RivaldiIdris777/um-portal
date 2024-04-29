<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilCBT extends Model
{
    use HasFactory;
    protected $table = 'tb_hasil_cbt';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;

}
