<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message_text',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}