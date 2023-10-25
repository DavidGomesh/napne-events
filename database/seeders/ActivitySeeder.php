<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::factory()->create([
            'activity_id' => '1eb84740-6f33-4482-9ce2-214629d435fe',
            'description' => 'Palestra sobre Libras',
            'starts_at' => '2023-12-06 08:00:00',
            'ends_at' => '2023-12-06 10:00:00',
            'hours' => 2,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => '5b5644dc-352f-401e-9824-fa8351a1ec34',
            'description' => 'Palestra sobre Braille',
            'starts_at' => '2023-12-06 10:00:00',
            'ends_at' => '2023-12-06 12:30:00',
            'hours' => 2.5,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => 'adf7e087-df1f-4c9c-bdf9-d594c845c9be',
            'description' => 'Palestra sobre Autismo',
            'starts_at' => '2023-12-07 08:00:00',
            'ends_at' => '2023-12-07 10:00:00',
            'hours' => 2,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => 'afb088a1-601d-4b9f-86b0-cf9ee37bd3a0',
            'description' => 'Palestra sobre Surdez',
            'starts_at' => '2023-12-07 10:00:00',
            'ends_at' => '2023-12-07 12:30:00',
            'hours' => 2.5,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => 'd6f7a6f2-0ea5-4f05-8498-4a4d48050f3a',
            'description' => 'Oficina de Libras',
            'starts_at' => '2023-12-06 08:00:00',
            'ends_at' => '2023-12-06 10:00:00',
            'hours' => 2,
            'vacancies' => 20,
            'type' => 'workshop',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);
        
        Activity::factory()->create([
            'activity_id' => 'ddfc563d-8698-4876-ae74-cb1bc0fd5ec1',
            'description' => 'Oficina de Braille',
            'starts_at' => '2023-12-06 08:00:00',
            'ends_at' => '2023-12-06 10:00:00',
            'hours' => '2',
            'vacancies' => 20,
            'type' => 'workshop',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);
    }
}
