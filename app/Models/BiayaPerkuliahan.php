<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaPerkuliahan extends Model
{
    use HasFactory;
    protected $table = 'tb_biaya_perkuliahan';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/biayaperkuliahan/' . $value),
        );
    }
}
