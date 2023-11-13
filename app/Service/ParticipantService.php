<?php

namespace App\Service;

use App\Models\Participant;

class ParticipantService {
    public static function save(array $participant) {
        if (Participant::where('name', $participant['name'])->first()) {
            throw new \Exception('Participante já cadastrado!');
        }

        return Participant::create(
            $participant + ['participant_id' => uuid_create()]
        );
    }
}
