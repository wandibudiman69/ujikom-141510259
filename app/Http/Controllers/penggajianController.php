<?php

namespace App\Http\Controllers;

use Request;
use Input;
use Validator;
use App\Penggajian;
class penggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggajian=Penggajian::all();
        return view('penggajian.index',compact('penggajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penggajian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        // $this->validate($request,['kode_g' => 'required|unique:golongans,kode_g',
    {
        //     'nama_g' => 'required','besar_uang' =>'required'
        //     ]);

        $rules=['tunjangan_pegawai_id' => 'required|unique:penggajians,tunjangan_pegawai_id',
            'jumlah_jam_lembur' => 'required','jumlah_uang_lembur' =>'required' , 'gaji_pokok' => 'required' , 'tanggal_pengambilan' => 'required' ,'status_pengambilan' => 'required' , 'petugas_penerima' => 'required'];
        $sms=[
            'tunjangan_pegawai_id.required' => 'jangan kosong',
            'tunjangan_pegawai_id.unique' => 'data udah ada',
            'jumlah_jam_lembur.required' => 'jangan kosong',
            'jumlah_uang_lembur.required' => 'jangan kosong',
            'gaji_pokok.required' => 'jangan kosong',
            'tanggal_pengambilan.required' => 'jangan kosong',
            'status_pengambilan.required' => 'jangan kosong',
            'petugas_penerima.required' => 'jangan kosong'
            ];
        $validasi = Validator::make(Input::all(),$rules,$sms);
        if($validasi->fails()){
            return redirect()->back()
            ->withErrors($validasi)
            ->withInput();
        }

        $penggajian=Request::all();
        Penggajian::create($penggajian);
        return redirect('penggajian');
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
        $penggajian=Penggajian::find($id);
        return view ('penggajian.edit',compact('penggajian'));
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
        $rules=['tunjangan_pegawai_id' => 'required|unique:penggajians,tunjangan_pegawai_id',
            'jumlah_jam_lembur' => 'required','jumlah_uang_lembur' =>'required' , 'gaji_pokok' => 'required' , 'tanggal_pengambilan' => 'required' ,'status_pengambilan' => 'required' , 'petugas_penerima' => 'required'];
        $sms=[
            'tunjangan_pegawai_id.required' => 'jangan kosong',
            'tunjangan_pegawai_id.unique' => 'data udah ada',
            'jumlah_jam_lembur.required' => 'jangan kosong',
            'jumlah_uang_lembur.required' => 'jangan kosong',
            'gaji_pokok.required' => 'jangan kosong',
            'tanggal_pengambilan.required' => 'jangan kosong',
            'status_pengambilan.required' => 'jangan kosong',
            'petugas_penerima.required' => 'jangan kosong'
            ];
        $validasi = Validator::make(Input::all(),$rules,$sms);
        if($validasi->fails()){
            return redirect()->back()
            ->withErrors($validasi)
            ->withInput();
        }

        $penggajian=Request::all();
        Penggajian::create($penggajian);
        return redirect('penggajian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penggajian=Penggajian::find($id)->delete();
        return redirect('penggajian');
    }
}
