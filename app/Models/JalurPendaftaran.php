<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JalurPendaftaran extends Model
{
    use HasFactory;
    protected $table = 'tb_jalur_pendaftaran';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/jalur_pendaftaran/' . $value),
        );
    }
}
