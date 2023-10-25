<?php

namespace Database\Seeders;

use App\Models\Frequency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrequencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Frequency::factory()->create([
            'frequency_id' => '0e190779-058b-4254-90f4-b62cf311e2a2',
            'activity_fk' => '1eb84740-6f33-4482-9ce2-214629d435fe',
            'participant_fk' => '56b366cb-f732-42b9-9e13-bf7eb241563a',
        ]);
        
        Frequency::factory()->create([
            'frequency_id' => '3534aeda-be6e-4bb3-8e62-30dc9afc356e',
            'activity_fk' => '5b5644dc-352f-401e-9824-fa8351a1ec34',
            'participant_fk' => '56b366cb-f732-42b9-9e13-bf7eb241563a',
        ]);

        Frequency::factory()->create([
            'frequency_id' => '46733034-08c4-4656-95a3-6c8de3ecba90',
            'activity_fk' => 'adf7e087-df1f-4c9c-bdf9-d594c845c9be',
            'participant_fk' => '56b366cb-f732-42b9-9e13-bf7eb241563a',
        ]);

        Frequency::factory()->create([
            'frequency_id' => '87a883c4-bc3f-45bc-bced-975d99951d1d',
            'activity_fk' => 'afb088a1-601d-4b9f-86b0-cf9ee37bd3a0',
            'participant_fk' => '56b366cb-f732-42b9-9e13-bf7eb241563a',
        ]);

        Frequency::factory()->create([
            'frequency_id' => '890760df-65a4-4369-aebd-8e8a2b64a4e0',
            'activity_fk' => 'd6f7a6f2-0ea5-4f05-8498-4a4d48050f3a',
            'participant_fk' => '56b366cb-f732-42b9-9e13-bf7eb241563a',
        ]);

        Frequency::factory()->create([
            'frequency_id' => 'be72ffb0-a9db-439c-add3-d0989a756f8f',
            'activity_fk' => '1eb84740-6f33-4482-9ce2-214629d435fe',
            'participant_fk' => '8e80e902-a7f1-4f66-a41d-27922cc587e7',
        ]);
        
        Frequency::factory()->create([
            'frequency_id' => 'c760bc07-22aa-4f06-9438-d6de9884a1df',
            'activity_fk' => '5b5644dc-352f-401e-9824-fa8351a1ec34',
            'participant_fk' => '8e80e902-a7f1-4f66-a41d-27922cc587e7',
        ]);

        Frequency::factory()->create([
            'frequency_id' => 'cfd538c9-176a-4ae5-977c-b194e341b29e',
            'activity_fk' => 'adf7e087-df1f-4c9c-bdf9-d594c845c9be',
            'participant_fk' => '8e80e902-a7f1-4f66-a41d-27922cc587e7',
        ]);

        Frequency::factory()->create([
            'frequency_id' => 'd9c461c4-cc89-43fd-a9e0-e6e9421db917',
            'activity_fk' => 'ddfc563d-8698-4876-ae74-cb1bc0fd5ec1',
            'participant_fk' => '8e80e902-a7f1-4f66-a41d-27922cc587e7',
        ]);

    }
}
