<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'tb_program_studi';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;

    public function fakultas()
    {
        return $this->hasOne(Fakultas::class, 'id','id_fakultas');
    }
}
