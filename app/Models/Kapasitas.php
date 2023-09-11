<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapasitas extends Model
{
    use HasFactory;
    protected $table = 'tb_kapasitas';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;
}
