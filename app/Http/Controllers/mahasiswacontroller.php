<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;


class mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa=mahasiswa::where('status','1')->get();
        return view('mahasiswa.index', [
            'mahasiswa'=>$mahasiswa
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create', [
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
        'NIM' => 'required|unique:mahasiswas|max:255',
        'email' => 'required|unique:mahasiswas|max:255',
        'jurusan' => 'required',
        'nama' => 'required',
    ]);

        Mahasiswa::create([
        'nama' => $request -> nama,
        'NIM' => $request -> NIM,
        'jurusan' => $request -> jurusan,
        'email' => $request -> email,
        'status'=>'1',
        'created_at' => now(),
        'updated_at' => now(),
        ]);
        $mahasiswa=dosen::get();
        return redirect('/mahasiswa');
        //
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
        $mahasiswa=mahasiswa::find($id);
        return view('mahasiswa.edit', [
            'mahasiswa'=>$mahasiswa
        ]);

        //
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
        $rules=[

            'jurusan' => 'required',
            'nama' => 'required',
        ];
        $mahasiswa=Mahasiswa::find($id);
        // dd($mahasiswa->NIM);
        if ($request->NIM!=$mahasiswa->NIM){
            $rules['NIM']='required|unique:mahasiswas|max:255';
        }
        if ($request->email!=$mahasiswa->email){
            $rules['email']='required|unique:mahasiswas|max:255';
        }
        $validated = $request->validate($rules);

            Mahasiswa::where('id',$id)->update([
                'nama' => $request -> nama,
                'NIM' => $request -> NIM,
                'jurusan' => $request -> jurusan,
                'email' => $request -> email,
                'created_at' => now(),
                'updated_at' => now(),
                ]);
                $mahasiswa=dosen::get();
                return redirect('/mahasiswa');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        mahasiswa::find($id)->update([
            'status'=>'0'
        ]);
        return redirect('/mahasiswa');
        //
    }
}
