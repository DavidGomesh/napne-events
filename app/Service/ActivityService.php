<?php

namespace App\Service;
use App\Models\Activity;

class ActivityService {

    public static function subscribeWorkshop($participantId, $workshopId) {
        $workshop = Activity::where('activity_id', $workshopId)->first();
        if (!$workshop->hasVacancies()) {
            return false;
        }

        SubscriptionService::save([
            'activity_fk' => $workshopId,
            'participant_fk' => $participantId,
        ]);

        $workshop->increment('amount_subscriptions');
        return true;
    }

}