<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use App\Service\ActivityService;
use App\Service\ParticipantService;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParticipantRequest $request) {
        try {
            $participant = ParticipantService::save($request->all());
            if ($request['workshopId']) {
                $subscribed = ActivityService::subscribeWorkshop(
                    $participant['participant_id'], $request['workshopId']
                );
            }
            
            return response()->json([
                'workshop' => isset($request['workshopId']),
                'subscribed' => $subscribed ?? null], 201
            );
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Participant $participant)
    {
        return response()->json($participant);
    }

    public function findByName($name) {
        try {
            $participant = Participant::where('name', $name)->where('role', 'listener')->firstOrFail();
            return response()->json($participant);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParticipantRequest $request, Participant $participant)
    {
        //
    }

    public function accredit($participantId) {
        try {
            ParticipantService::accredit($participantId);
            return response()->json(['accredited' => true], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
