<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['namaSiswa','angkatanSiswa','emailSiswa','alamatSiswa','noHP','pekerjaan','jabatan','saranSekolah','saranAlumni'];
}
