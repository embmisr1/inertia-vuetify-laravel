<?php

namespace App\Http\Controllers\API\MOV;

use App\Filters\MovsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovRequest;
use App\Http\Resources\MovResource;
use App\Http\Resources\MovResourceV2;
use App\Models\Mov;
use App\Service\UserService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MOVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,UserService $service)
    {
        try {
            return MovResource::collection((new MovsFilter($service->verify_user_role()))->get());
        } catch (\Throwable $th) {
            return response()->json([
                "message"=> $th->getMessage()
            ],400);
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
    public function store(MovRequest $request)
    {
        try {
            $input = $request->validated();

            if (empty($input['payment_date'])) {
                $input['payment_date'] = '';
            }
            if (empty($input['compliance_date'])) {
                $input['compliance_date'] = '';
                $input['complied'] = false;
            }else{
                $input['complied'] = true;
            }
            if (empty($input['notice_of_date'])) {
                $input['notice_of_date']  = '';
            }
            $input['user_id'] = auth()->id();
            $new_mov = Mov::create($input);
            if ($request->file('files') !== null) {
                foreach ($request->file('files') as $file) {
                    $new_mov->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection('mov','mov');
                }
            }
            return response()->json([
                "data" => $new_mov,
                "message" => "MOV Created"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage()
            ],400);
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
        return new MovResourceV2($mov);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function edit(Mov $mov)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function update(MovRequest $request, Mov $mov)
    {
        try {
            $input = $request->validated();

            if (empty($input['payment_date'])) {
                $input['payment_date'] = '';
            }
            if (empty($input['compliance_date'])) {
                $input['compliance_date'] = '';
            }
            if (empty($input['notice_of_date'])) {
                $input['notice_of_date']  = '';
            }
            $input['user_id'] = auth()->id();
            $mov->update($input);
            // if ($request->file('files') !== null) {
            //     foreach ($request->file('files') as $file) {
            //         $mov->addMedia($file)
            //             ->preservingOriginal()
            //             ->toMediaCollection('mov','mov');
            //     }
            // }
            return response()->json([
                "data" => $mov,
                "message" => "MOV Updated"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage()
            ],400);
        };
    }
    public function updateViaFormData(MovRequest $request, Mov $mov)
    {
        try {
            $input = $request->validated();

            if (empty($input['payment_date'])) {
                $input['payment_date'] = '';
            }
            if (empty($input['compliance_date'])) {
                $input['compliance_date'] = '';
                $input['complied'] = false;
            }
            else{
                $input['complied'] = true;
            }
            if (empty($input['notice_of_date'])) {
                $input['notice_of_date']  = '';
            }
            $input['user_id'] = auth()->id();
            $mov->update($input);
            if ($request->file('files') !== null) {
                foreach ($request->file('files') as $file) {
                    $mov->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection('mov','mov');
                }
            }
            return response()->json([
                "data" => $mov,
                "message" => "MOV Updated"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage()
            ],400);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mov $mov)
    {
        $mov->delete();

        return response()->json([
            "message"=>"Mov Delete"
        ]
        );
    }
}
