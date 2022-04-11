<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Suplier extends Model
{
    use AutoNumberTrait;

    protected $table ='suplier';
    protected $guarded= [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_suplier' => [
                'format' => function () {
                    return 'SPLR/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
