<?php

namespace App\Http\Controllers;
use App\Models\Matkul;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class matkulcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkuls = Matkul::where('status','1')->get();
        return view('matkul.index', [
          'matkuls'=>$matkuls
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $mahasiswas = Mahasiswa::where('status','1')->get();
      $dosens = Dosen::where('status','1')->get();
      return view('matkul.add',[
        'mahasiswas' => $mahasiswas,
        'dosens' => $dosens
      ]);
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
        'kode' => 'required|unique:matkuls|max:255',
        'nama' => 'required|max:255',
        'id_Dosen' => 'required|numeric',
        'id_Mahasiswa' => 'required|numeric',
      ]);

      Matkul::create([
        'kode' => $request->kode,
        'nama' => $request->nama,
        'id_Dosen' => $request->id_Dosen,
        'id_Mahasiswa' => $request->id_Mahasiswa,
        'status'=>'1',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      return redirect('/matkul');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = Matkul::find($id);
        $mahasiswas = Mahasiswa::get();
        $dosens = Dosen::get();
        return view('matkul.edit', [
          'matkul' => $matkul,
          'mahasiswas' => $mahasiswas,
          'dosens' => $dosens
        ]);
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
        'kode' => 'required|unique:matkuls|max:255',
        'nama' => 'required|max:255',
        'id_Dosen' => 'required|numeric',
        'id_Mahasiswa' => 'required|numeric',
      ]);

      Matkul::where('id', $id)->update([
        'kode' => $request->kode,
        'nama' => $request->nama,
        'id_Dosen' => $request->id_Dosen,
        'id_Mahasiswa' => $request->id_Mahasiswa,
      ]);

      return redirect('/matkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Matkul::where('id', $id)->update([
        'status'=>'0'
    ]);
      return redirect('/matkul'); 
    }
}
