<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $primaryKey = 'nip';

    protected $fillable = ['nama','alamat','gender','status','pendidikan','notelp','id_jabatan'];

    public function jabatan(){
        return $this->belongsTo(jabatan::class, 'id_jabatan');
    }
}
