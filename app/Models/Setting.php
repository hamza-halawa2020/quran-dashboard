<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'whatsapp',
        'facebook',
        'instagram',
        'email',
        'address',
        'about_us',
        'about_us_footer',
        'logo',
    ];

    public static function getSettings()
    {
        return self::first();
    }
}
