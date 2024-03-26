<?php

namespace App\Http\Controllers\Fleet\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\LoggerRequest;
use App\Http\Resources\Fleet\RemarksResource;
use Illuminate\Http\Request;
use App\Models\Fleet\Request as RequestModel;
use App\Models\Fleet\RequestLogs;
use App\Services\RequestLogger;

class RemarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $qry = RequestLogs::whereRequestId(request('request_vehicle_id'))->get();
            return response()->json($qry);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoggerRequest $request)

    {
        try {
            $input = $request->validated();
            $logger = new RequestLogger();
            $new_log = $logger->createRemarks($input['request_id'], auth()->id(), $input['remarks']);
            return back()->with('message', 'Remark Submitted  Successfully.');
            // return redirect()->route("chauffeur.show", ["id" => $input['request_id']])->with("message", "Vehicle request Submitted");
            // return response()->json([
            //     "data" => $new_log,
            //     "message" => "New Remarks Created!"
            // ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RequestLogs $remark)
    {
        return RemarksResource::collection($remark);
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
