<?php

namespace App\Service;

use App\Models\Participant;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ParticipantService {
    public static function save(array $participant) {
        if (Participant::where('name', $participant['name'])->first()) {
            throw new \Exception('Participante já cadastrado!');
        }

        return Participant::create(
            $participant + ['participant_id' => uuid_create()]
        );
    }

    public static function accredit($participantId) {
        try{
            $participant = Participant::findOrFail($participantId);
            $participant->accredited = true;
            $participant->save();
        } catch (ModelNotFoundException $e) {
            throw new \Exception("Participante não encontrado com o ID: $participantId");
        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage());
        }
    }
}
