<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPLBiayaPerkuliahan extends Model
{
    use HasFactory;
    protected $table = 'tb_rplbiayaperkuliahan';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;
}
