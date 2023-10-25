<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::factory()->create([
            'subscription_id' => '53328cfb-84e0-406d-b22a-76953d55ecd0',
            'activity_fk' => 'd6f7a6f2-0ea5-4f05-8498-4a4d48050f3a',
            'participant_fk' => '56b366cb-f732-42b9-9e13-bf7eb241563a',
        ]);

        Subscription::factory()->create([
            'subscription_id' => 'cf3183ce-9663-4859-84f3-e8c45821b436',
            'activity_fk' => 'ddfc563d-8698-4876-ae74-cb1bc0fd5ec1',
            'participant_fk' => '8e80e902-a7f1-4f66-a41d-27922cc587e7',
        ]);
    }
}
