<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return response()->json([
            'success' => true,
            'message' => 'data kategori',
            'data' => $kategori,
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
        $kategori = new Kategori();
        $kategori = $request->nama;
        $kategori = $request->slug;
        $kategori->save();
        return response()->json([
            'success' => true,
            'message' => 'Data kategori Berhasil Dibuat',
            'data' => $kategori,
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
        $kategori = Kategori::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'menampilkan data kategori',
            'data' => $kategori,
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
        $kategori = Kategori::findOrFail();
        $kategori = $request->nama;
        $kategori = $request->slug;
        $kategori->save();
        return response()->json([
            'success' => true,
            'message' => 'Data kategori Berhasil Dibuat',
            'data' => $kategori,
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
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data kategori Berhasil Dibuat',
            'data' => $kategori,
        ], 200);
    }
}
