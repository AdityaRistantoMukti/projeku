<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Barang extends Model
{
    use AutoNumberTrait;

    protected $table = 'barang';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_barang' => [
                'format' => function () {
                    return 'BRG/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
    }
}
