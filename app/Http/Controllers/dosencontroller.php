<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class dosencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosens=dosen::where('status','1')->get();
        return view('dosen.index', [
            'dosens'=>$dosens
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
        return view('dosen.create', [
            'alex' => 'nama'
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
        'kode_dosen' => 'required|unique:dosens|max:255',
        'email' => 'required|unique:dosens|max:255',
        'nama' => 'required',
    ]);

        Dosen::create([
        'nama' => $request -> nama,
        'kode_dosen' => $request -> kode_dosen,
        'email' => $request -> email,
        'status'=>'1',
        'created_at' => now(),
        'updated_at' => now(),
        ]);
        $dosens=dosen::get();
        return view('dosen.index', [
            'dosens'=>$dosens
        ]);
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
        $dosen=dosen::find($id);
        return view('dosen.edit', [
            'dosen'=>$dosen
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
         Dosen::where('id',$id)->update([
            'nama' => $request -> nama,
            'kode_dosen' => $request -> kode_dosen,
            'email' => $request -> email,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
            $dosens=dosen::get();
            return view('dosen.index', [
                'dosens'=>$dosens
            ]);
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
        
        dosen::find($id)->update([
            'status'=>'0'
        ]);
        return view('dosen.index');
        //
    }
}
