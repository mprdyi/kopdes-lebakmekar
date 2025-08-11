<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class JenisSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect('login');

        }
        //$data = DB::table('jenis_surat')->get(); (ini pake db langsung)

        //ini pake model langsung
        $data = JenisSurat::orderBy('id', 'desc')->get();
        $view_data = ([
            'data' => $data,
        ]);

        return view('sekretaris.jenis-surat', $view_data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('sekretaris.crud-jenis-surat.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kode_surat = $request->input('kode-surat');
        $jenis_surat = $request->input('jenis-surat');
        $nama_surat = $request->input('nama-surat');

        //validasi
        $request->validate([
        'kode-surat' => 'required',
        'nama-surat' => 'required',
        'jenis-surat' => 'required'

        ],[
            'kode-surat.required' => 'Kode surat harus di isi',
            'jenis-surat.required' => 'Jenis surat harus di isi',
            'nama-surat.required' => 'Nama surat harus di isi',

        ]);

        //insert
        $post = JenisSurat::create([
            'kode_surat' => $kode_surat,
            'jenis_surat' => $jenis_surat,
            'nama_surat' => $nama_surat
        ]);

        return redirect('jenis-surat')->with('success', 'Data berhasil disimpan!');;
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
        $data = JenisSurat::where('id', $id)->first();
        $view_data = ([
            'data' =>$data
        ]);

        return view('sekretaris.crud-jenis-surat.edit', $view_data);

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

        $kode_surat = $request->input('kode-surat');
        $jenis_surat = $request->input('jenis-surat');
        $nama_surat = $request->input('nama-surat');

        JenisSurat::where('id', $id)->update([
                    'kode_surat' => $kode_surat,
                    'jenis_surat' => $jenis_surat,
                    'nama_surat' => $nama_surat,
                    'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect ('jenis-surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     JenisSurat::where('id', $id)->delete();

     return redirect('jenis-surat')->with('success', 'Data berhasil dihapus!');;;
    }
}
