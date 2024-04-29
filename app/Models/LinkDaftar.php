<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkDaftar extends Model
{
    use HasFactory;
    protected $table = 'tb_link';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;
}
