<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $table = 'tb_fakultas';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;
}
