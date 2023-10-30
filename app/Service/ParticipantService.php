<?php

namespace App\Service;

use App\Models\Participant;

class ParticipantService {
    public static function save(array $participant) {
        return Participant::create(
            $participant + ['participant_id' => uuid_create()]
        );
    }
}
