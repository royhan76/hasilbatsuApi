<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Datamodels;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Datamodels::all();

        // return $data;
        // $data = DB::table('databm')->get();

        // echo $data;
        if ($data) {
            // print_r($data);
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'gagal');
        }
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
        try {
            $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
                'pertanyaan' => 'required',
                'jawaban' => 'required',
                'referensi' => 'required',
                'kategori' => 'required',
                'bab' => 'required',
            ]);
            $databm = Datamodels::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban,
                'referensi' => $request->referensi,
                'kategori' => $request->kategori,
                'bab' => $request->bab,
            ]);
            $data = Datamodels::where('id', '=', $databm->id)->get();
            if ($data) {
                return ApiFormatter::createApi(200, 'berhasi input data', $data);
            } else {
                return ApiFormatter::createApi(400, 'gagal input data');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'gagal input data', $error);
        }
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
        //
    }
}
