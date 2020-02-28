<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('id','asc')->paginate(5);
        return view('mahasiswa.index',compact('mahasiswas'))
                ->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'namaSiswa'=>'required',
            'angkatanSiswa'=>'required',
            'emailSiswa'=>'required',
            'alamatSiswa' => 'required',
            'noHP' => 'required',
            'pekerjaan'=>'required',
            'jabatan' => 'required',
            'saranSekolah' =>'required',
            'saranAlumni' =>'required',
            //'gambarMahasiswa' => 'required|image|mimes:jpg,png,jpeg'
        ]);
 
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')
                         ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaSiswa'=>'required',
            'angkatanSiswa'=>'required',
            'emailSiswa'=>'required',
            'alamatSiswa' => 'required',
            'noHP' => 'required',
            'pekerjaan'=>'required',
            'jabatan' => 'required',
            'saranSekolah' =>'required',
            'saranAlumni' =>'required',
            //'gambarMahasiswa' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->namaSiswa = $request->get('namaSiswa');
        $mahasiswa->angkatanSiswa = $request->get('angkatanSiswa');
        $mahasiswa->emailSiswa = $request->get('emailSiswa');
        $mahasiswa->alamatSiswa = $request->get('alamatSiswa');
        $mahasiswa->noHP = $request->get('noHP');
        $mahasiswa->pekerjaan = $request->get('pekerjaan');
        $mahasiswa->jabatan = $request->get('jabatan');
        $mahasiswa->saranSekolah = $request->get('saranSekolah');
        $mahasiswa->saranAlumni = $request->get('saranAlumni');

        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}
