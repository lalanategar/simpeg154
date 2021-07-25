<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $primaryKey = 'id_jabatan';

    protected $fillable = ['jabatan','divisi','gaji'];
}
