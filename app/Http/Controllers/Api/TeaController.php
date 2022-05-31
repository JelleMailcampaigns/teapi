<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeaRequest;
use App\Models\Tea;
use Illuminate\Http\Request;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teas = Tea::all();

        return response()->json([
            'status' => true,
            'posts' => $teas
        ]);
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
        $tea = Tea::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Tea added succesfully!",
            'tea' => $tea
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function show(Tea $tea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tea $tea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTeaRequest $request, Tea $tea)
    {
        $tea->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Tea updated succesfully!",
            'tea' => $tea
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tea $tea)
    {
        $tea->delete();

        return response()->json([
            'status' => true,
            'message' => "Post Deleted successfully!",
        ], 200);
    }
}
