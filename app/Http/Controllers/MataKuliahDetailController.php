<?php

namespace App\Http\Controllers;

use App\MataKuliahDetail;
use Illuminate\Http\Request;

class MataKuliahDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Category::all()->toArray());
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
        $matkuldet = MataKuliahDetail::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $data = [
            'data' => $task,
            'status' => (bool)$task,
            'message' => $task ? 'New Mmahasiswa has been added!' : 'Error adding new mahasiswa!',
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataKuliahDetail  $mataKuliahDetail
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliahDetail $mataKuliahDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataKuliahDetail  $mataKuliahDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(MataKuliahDetail $mataKuliahDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataKuliahDetail  $mataKuliahDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataKuliahDetail $mataKuliahDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataKuliahDetail  $mataKuliahDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataKuliahDetail $mataKuliahDetail)
    {
        //
    }
}
