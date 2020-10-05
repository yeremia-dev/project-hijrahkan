<?php

namespace App\Http\Controllers;

use App\DataUser;
use App\Exports\DataUsersExport;
use App\JenisCicilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $sisa_cicilan1 = explode(',', $request->sisa_cicilan);
        $sisa_cicilan2 = explode('.', $sisa_cicilan1[0]);

        $besar_cicilan1 = explode(',', $request->besar_cicilan);
        $besar_cicilan2 = explode('.', $besar_cicilan1[0]);

        DataUser::create([
            'id_jenis' => base64_decode($request->jenis_cicilan) ,
            'nama' => $request->nama,
            'nomor_hp' => $request->no_hp,
            'email' => $request->email,
            'sisa_cicilan' => (int) join($sisa_cicilan2),
            'besar_cicilan' => (int) join($besar_cicilan2),
            'sisa_waktu_cicilan' => $request->sisa_waktu,
            'nama_bank' => $request->nama_bank
        ]);

        return back()->with('status', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function show(DataUser $dataUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DataUser $dataUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataUser $dataUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataUser $dataUser)
    {
        //
    }

    public function export()
    {
        return Excel::download(new DataUsersExport(), 'Data User '.date('j-m-y').'.xlsx');
    }


    public function tessi()
    {
        $user = DataUser::all();
        foreach ($user as $users){
            echo ($users->id);
        }
    }
}
