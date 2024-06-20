<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Requests\Events\EventsRequests;
use App\Http\Resources\Events\EventsResource;
use App\Models\Events\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(EventsRequests $request)
    {
        try {
            $input = $request->validated();
            $input['user_id'] = auth()->id();
            $newEvent = Events::create($input);

            return Redirect::to("app/v1/assemblage")->with('success', 'New Event Created.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Events $id)
    {
        return new EventsResource($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Events  $event
     */
    public function update(EventsRequests $request, Events $event)
    {
        $input = $request->validated();
        $event->update($input);

        return Redirect::to('app/v1/assemblage/' . $event->id)->with('success', $event->title . ' Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Events $event)
    {
        $event->delete();

        return Redirect::to('app/v1/assemblage')->with('success', 'Deleted Successfully');
    }
}
