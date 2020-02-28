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
        <div class="row">
            <div class="col-md-10">
                <h3> Daftar Alumni </h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create')}}"> Tambah Alumni </a>
            </div>
        </div> 
        <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>        
        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
            <th width="40px"><b>No.</b></th>
            <th width="180px">Nama Lengkap</th>
            <th width="180px">Tahun Lulus</th>
            <th width="180px">Email </th>
            <th width="180px">Alamat Rumah</th>
            <th width="180px">No. Telepon </th>
            <th width="180px">pekerjaan </th>
            <th width="180px">jabatan </th>
            <th width="210px">Action</th>
        </tr>
      </thead>
        @foreach ($mahasiswas as $mahasiswa) 
            <tr>
                <td><b>{{++$i}}.<b></td>
                <td>{{$mahasiswa->namaSiswa}}</td>
                <td align="center">{{$mahasiswa->angkatanSiswa}}</td>
                <td>{{$mahasiswa->emailSiswa}}</td>
                <td>{{$mahasiswa->alamatSiswa}}</td>
                <td>{{$mahasiswa->noHP}}</td>
                <td>{{$mahasiswa->pekerjaan}}</td>
                <td>{{$mahasiswa->jabatan}}</td>
              
                <td>
                    <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="post">
                    <a class="btn btn-sm btn-success" href="{{ route('mahasiswa.show', $mahasiswa->id)}}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('mahasiswa.edit', $mahasiswa->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach
    </table>

    {!! $mahasiswas->links() !!}
    </div>
    </body>

</html>

@endsection