<?php

namespace App\Service;
use App\Models\Frequency;

class FrequencyService {
    public static function save(array $frequency) {
        $existingFrequency = (
            Frequency::where('activity_fk', $frequency['activity_fk'])
            ->where('participant_fk', $frequency['participant_fk'])
            ->first()
        );
        
        if (!$existingFrequency) {
            return Frequency::create(
                $frequency + ['frequency_id' => uuid_create()]
            );
        }
    }
}