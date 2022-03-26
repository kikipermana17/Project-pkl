<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Biro;
use App\Models\Kategori;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kategori()
    {
        $kategori = Kategori::all();
        return response()->json([
            'success' => true,
            'message' => 'Data kategori',
            'data' => $kategori,
        ], 200);
    }

    public function biro()
    {
        $biro = Biro::all();
        return response()->json([
            'success' => true,
            'message' => 'Data biro',
            'data' => $biro,
        ], 200);
    }

    public function index()
    {
        // $wisata = DB::table('wisatas')
        //     ->join('kategori', 'wisata.kategori_id', '=', 'kategori_id')
        //     ->join('biro', 'biro.biro_id', '=', 'biro_id')
        //     ->select('kategori.kategori_id', 'wisata.nama_wisata', 'wisata.alamat', 'wisata.deskripsi', 'wisata.tiket', 'wisata.fasilitas', 'biro.biro_id', 'wisata.cover')
        //     ->get();
        $wisata = Wisata::all();
        return response()->json([
            'success' => true,
            'message' => 'data wisata',
            'data' => $wisata,
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
        $wisata = new Wisata();
        // $wisata->kategori_id = $request->kategori_id;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->alamat = $request->alamat;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->tiket = $request->tiket;
        $wisata->fasilitas = $request->fasilitas;
        // $wisata->biro_id = $request->biro_id;
        $wisata->cover = $name;

        // $image->move(public_path().' images/alat', $name);
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/wisata/', $name);
            $wisata->cover = $name;
        }
        $wisata->save();
        return response()->json([
            'success' => true,
            'message' => 'Data wisata Berhasil dibuat',
            'data' => $wisata,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Show Data wisata',
            'data' => $wisata,
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
        $wisata = Wisata::findOrFail($id);
        // $wisata->kategori_id = $request->kategori_id;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->alamat = $request->alamat;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->tiket = $request->tiket;
        $wisata->fasilitas = $request->fasilitas;
        // $wisata->biro_id = $request->biro_id;
        $wisata->cover = $name;

        // $image->move(public_path().' images/alat', $name);
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/wisata/', $name);
            $wisata->cover = $name;
        }
        $wisata->save();
        return response()->json([
            'success' => true,
            'message' => 'Data wisata Berhasil dibuat',
            'data' => $wisata,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data wisata Berhasil dihapus',
            'data' => $wisata,
        ], 200);
    }
}
