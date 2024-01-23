<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_voucher',
        'valid_voucher',
        'deskripsi_voucher',
        'point_voucher',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function getTable()
    {
        return 'vouchers';
    }
}