<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteData extends Model
{
    protected $table = 'site_data';
    
    protected $fillable = [
        'key',
        'value',
        'type'
    ];

    public $timestamps = true;
}
