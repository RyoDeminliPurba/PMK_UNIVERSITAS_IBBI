<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nama extends Model
{
    use HasFactory;
     protected$table = "tblnama";
     protected$fillable = ['nama','JENISKELAMIN','JURUSAN','TAHUNANGKATAN','tgllahir'];

}

       
    
    