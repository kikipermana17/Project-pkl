<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Biro;
use Illuminate\Http\Request;

class BiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biro = Biro::all();
        return response()->json([
            'success' => true,
            'message' => 'data biro',
            'data' => $biro,
        ], 200);

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biro = new Biro();
        $biro = $request->nama;
        $biro = $request->alamat;
        $biro = $request->telpon;
        $biro->save();
        return response()->json([
            'success' => true,
            'message' => 'Data biro Berhasil Dibuat',
            'data' => $biro,
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biro = Biro::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'menampilkan data biro',
            'data' => $biro,
        ], 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $biro = Biro::findOrFail();
        $biro = $request->nama;
        $biro = $request->alamat;
        $biro = $request->telpon;
        $biro->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Biro Berhasil Dibuat',
            'data' => $biro,
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biro = Biro::findOrFail($id);
        $biro->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data biro Berhasil Dibuat',
            'data' => $biro,
        ], 200);

    }
}
