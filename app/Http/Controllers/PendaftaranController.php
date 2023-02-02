<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendaftaranFormRequest;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    //
    public function index()
    {
        $pendaftarans = Pendaftaran::all();
        return view('pendaftaran.index', compact('pendaftarans'));
    }

    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(PendaftaranFormRequest $request)
    {
        $data = $request->validated();

        $pendaftaran = Pendaftaran::create( $data);
        return redirect('/pendaftaran-siswa')->with('message', 'Berhasil Mendaftar');
    }

    
    public function edit($pendaftaran_id)
    {
        $pendaftaran = Pendaftaran::find($pendaftaran_id);
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    public function update(PendaftaranFormRequest $request, $pendaftaran_id)
    {
        $data = $request->validated();

        $pendaftaran = Pendaftaran::where('id', $pendaftaran_id)->update([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'negara' => $data['negara'],
            'nik' => $data['nik']
        ]);
        return redirect('/pendaftarans')->with('message', 'Update Berhasil');
    }

    public function destroy($pendaftaran_id)
    {
        $pendaftaran = Pendaftaran::find($pendaftaran_id)->delete();
        return redirect('/pendaftarans')->with('message', 'Delete Berhasil');
    }
}
