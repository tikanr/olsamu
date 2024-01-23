<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoucherExchange extends Model
{
    protected $table = 'voucher_exchange';

    protected $fillable = [
        'id_voucher',
        'id_user',
        'status',
        'redeem_voucher',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function voucher()
    {
        return $this->belongsTo('App\Voucher', 'id_voucher');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}