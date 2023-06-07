<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/datasiswa');
        $siswa = $data->json('data');

        for ($i=0; $i < count($siswa); $i++) {
            $siswa[$i]['image_path'] = env('API_HOST') . 'storage/' . $siswa[$i]['image'];
        }

        return view('siswa.index')->with('siswa' , $siswa);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $upload = [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'image' => $request->image,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->create('/api/datasiswa/store', $upload);
        return redirect('/datasiswa');

    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/datasiswa', $id);
        $siswa = $data->json();
        return view('siswa.show')->with('siswa', $siswa['data']);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/datasiswa', $id);
        $siswa = $data->json();
        return view('siswa.update')->with('siswa', $siswa['data']);
    }

    public function update(Request $request, $id)
    {
        $upload = [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'image' => $request->image,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->update('/api/datasiswa/update', $id, $upload);
        return redirect('/datasiswa');
    }

    public function destroy(Request $request, $id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/datasiswa/delete', $id);
        return redirect('/datasiswa');
    }
}
