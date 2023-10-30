<?php

namespace App\Service;
use App\Models\Subscription;

class SubscriptionService {
    public static function save(array $subscription) {
        return Subscription::created([
            $subscription + ['subscription_id' => uuid_create()]
        ]);
    }
}
