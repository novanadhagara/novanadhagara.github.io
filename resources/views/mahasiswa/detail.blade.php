@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Alumni</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Detail Alumni </h3>
            </div>
        </div>
        <br>

        <div class="form-group row">
            <label for="namaSiswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                {{$mahasiswa->namaSiswa}} 
            </div>
        </div>
        <div class="form-group row">
            <label for="angkatanSiswa" class="col-sm-2 col-form-label">Tahun Lulus</label>
            <div class="col-sm-10">
                 {{$mahasiswa->angkatanSiswa}}
            </div>
        </div>
        <div class="form-group row">
            <label for="emailSiswa" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                {{$mahasiswa->emailSiswa}} 
            </div>
        </div>
        <div class="form-group row">
            <label for="alamatSiswa" class="col-sm-2 col-form-label">Alamat Rumah</label>
                <div class="col-sm-10">
                    {{$mahasiswa->alamatSiswa}}
                </div>
        </div>
        <div class="form-group row">
            <label for="noHP" class="col-sm-2 col-form-label">No. Telepon / Handphone</label>
            <div class="col-sm-10">
                {{$mahasiswa->noHP}}
            </div>
        </div>
        <div class="form-group row">
            <label for="pendidkanSiswa" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
            <div class="col-sm-10">
                 {{$mahasiswa->pendidkanSiswa}}
            </div>
        </div>
        <div class="form-group row">
            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                {{$mahasiswa->pekerjaan}}
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                {{$mahasiswa->jabatan}} 
            </div>
        </div>
        <div class="form-group row">
            <label for="saranSekolah" class="col-sm-2 col-form-label">Saran / Masukan untuk Sekolah</label>
                <div class="col-sm-10">
                    {{$mahasiswa->saranSekolah}}
                </div>
        </div>
        <div class="form-group row">
            <label for="saranAlumni" class="col-sm-2 col-form-label">Saran / Masukan untuk Ikatan Alumni</label>
                <div class="col-sm-10">
                    {{$mahasiswa->saranAlumni}}
                </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <a href="{{route('mahasiswa.index')}}" class="btn  btn-success">Kembali</a>
            </div>
        </div>

    </div>
</body>
</html>

@endsection