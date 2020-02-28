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
                <h3>Edit Data Alumni</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="namaSiswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name="namaSiswa" class="form-control" id="namaSiswa" value="{{$mahasiswa->namaSiswa}}" placeholder="Nama Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="angkatanSiswa" class="col-sm-2 col-form-label">Tahun Lulus</label>
                <div class="col-sm-10">
                    <select id="angkatanSiswa" name="angkatanSiswa"class="form-control">
                        <option {{$mahasiswa->angkatanSiswa == '2010' ? 'selected' : ''}} value="2010"> 2010</option>
                        <option {{$mahasiswa->angkatanSiswa == '2011' ? 'selected' : ''}} value="2011"> 2011</option>
                        <option {{$mahasiswa->angkatanSiswa == '2012' ? 'selected' : ''}} value="2012"> 2012</option>
                        <option {{$mahasiswa->angkatanSiswa == '2013' ? 'selected' : ''}} value="2013"> 2013</option>
                        <option {{$mahasiswa->angkatanSiswa == '2014' ? 'selected' : ''}} value="2014"> 2014</option>
                        <option {{$mahasiswa->angkatanSiswa == '2015' ? 'selected' : ''}} value="2015"> 2015</option>
                        <option {{$mahasiswa->angkatanSiswa == '2016' ? 'selected' : ''}} value="2016"> 2016</option>
                        <option {{$mahasiswa->angkatanSiswa == '2017' ? 'selected' : ''}} value="2017"> 2017</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="emailSiswa" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="emailSiswa" class="form-control" id="emailSiswa" value="{{$mahasiswa->emailSiswa}}" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamatSiswa" class="col-sm-2 col-form-label">Alamat Rumah</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="alamatSiswa" rows="8" cols="80" placeholder="Alamat Rumah">{{$mahasiswa->alamatSiswa}}</textarea>
                    </div>
            </div>
            <div class="form-group row">
                <label for="noHP" class="col-sm-2 col-form-label">No. Telepon / Handphone</label>
                <div class="col-sm-10">
                    <input type="text" name="noHP"  class="form-control" id="noHP" value="{{$mahasiswa->noHP}}" placeholder="No. Telepon / Handphone">
                </div>
            </div>
           
          
            <div class="form-group row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" value="{{$mahasiswa->pekerjaan}}" id="pekerjaan" placeholder="Pekerjaan">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" name="jabatan" class="form-control" value="{{$mahasiswa->jabatan}}" id="jabatan" placeholder="Jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="saranSekolah" class="col-sm-2 col-form-label">Saran / Masukan untuk Sekolah</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="saranSekolah" rows="8" cols="80" placeholder="Saran / Masukan untuk Sekolah">{{$mahasiswa->saranSekolah}}</textarea>
                    </div>
            </div>
            <div class="form-group row">
                <label for="saranAlumni" class="col-sm-2 col-form-label">Saran / Masukan untuk Ikatan Alumni</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="saranAlumni" rows="8" cols="80" placeholder="Saran / Masukan untuk Ikatan Alumni">{{$mahasiswa->saranAlumni}}</textarea>
                    </div>
            </div>
            <!--<div class="form-group row">
                <label for="gambarMahasiswa" class="col-sm-2 col-form-label">Pilih gambar</label>
                <div class="col-sm-10">
                    <input type="file" name="gambarMahasiswa">
                <p class="text-danger">{{ $errors->first('gambarMahasiswa') }}</p>
                </div>
            </div>-->

             <hr>
                <div class="form-group">
                    <a href="{{route('mahasiswa.index')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection