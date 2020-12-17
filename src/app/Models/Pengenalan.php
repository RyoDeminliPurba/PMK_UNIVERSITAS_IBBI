<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengenalan extends Model
{
    use HasFactory;

    protected $table = "tblpengenalan";

    protected $fillable = [
        "kodenama","pengenalan"
    ];
}
