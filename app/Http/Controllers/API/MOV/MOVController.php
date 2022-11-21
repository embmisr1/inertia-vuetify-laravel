<?php

namespace App\Http\Controllers\API\MOV;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovRequest;
use App\Models\Mov;
use Illuminate\Http\Request;

class MOVController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function store(MovRequest $request)
    {
        try {
            $input = $request->validated();
            return response()->json([
                "data"=>$input
                // "data"=>$request->address
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "error"=>$th->getMessage()
            ]);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function show(Mov $mov)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function edit(Mov $mov)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mov $mov)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mov $mov)
    {
        //
    }
}
