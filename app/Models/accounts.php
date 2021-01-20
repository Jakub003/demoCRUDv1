<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'accountDate', 'required',
        'accountName', 'required',
        'accountType', 'required',
        'accountNote', 'nullable'
    ];
}
