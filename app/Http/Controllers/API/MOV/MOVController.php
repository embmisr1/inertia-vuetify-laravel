<?php

namespace App\Http\Controllers\API\MOV;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovRequest;
use App\Models\Mov;
use Carbon\Carbon;
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
            if(empty($input['payment_date'])){
                $input['payment_date'] ="" ;
            }
            if(empty($input['compliance_date'])){
                $input['compliance_date']="";
                $input['complied']  = true;
            }
            if(empty($input['notice_of_date'])){
                $input['notice_of_date']  = "";
            }

            // $new_date = Carbon::parse($input['date_of_inspection'])->format('m/d/Y');
            return response()->json([
                "data" => $input['date_of_inspection'],
                "message" => "MOV Created"
            ]);
            $new_mov = Mov::create($input);
            return response()->json([
                "data" => $new_mov,
                "message" => "MOV Created"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "error" => $th->getMessage()
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
