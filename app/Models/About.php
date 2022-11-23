<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    protected $fillable = [
        'nama',
        'keterangan1',
        'keterangan2',
        'keterangan3',
        'keterangan4',
        'keterangan5',
    ];
}
