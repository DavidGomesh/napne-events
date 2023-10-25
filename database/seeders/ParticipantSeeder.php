<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participant::factory()->create([
            'participant_id' => '0bf3031f-0072-4ac6-bb9b-ff0e8aeefdca',
            'name' => 'David Gomes',
            'email' => 'david@gmail.com',
            'role' => 'monitor',
            'has_disability' => null,
            'assistance_needed' => null,
            'accredited' => null,
        ]);

        Participant::factory()->create([
            'participant_id' => '42ac8e3f-12a2-4d2a-acb6-e610a3db8e74',
            'name' => 'Ana Joana',
            'email' => 'ana@gmail.com',
            'role' => 'monitor',
            'has_disability' => null,
            'assistance_needed' => null,
            'accredited' => null,
        ]);

        Participant::factory()->create([
            'participant_id' => '56b366cb-f732-42b9-9e13-bf7eb241563a',
            'name' => 'João Assunção',
            'email' => 'joao@gmail.com',
            'role' => 'listener',
            'has_disability' => false,
            'assistance_needed' => null,
            'accredited' => false,
        ]);

        Participant::factory()->create([
            'participant_id' => '8e80e902-a7f1-4f66-a41d-27922cc587e7',
            'name' => 'Maria Faria',
            'email' => 'maria@gmail.com',
            'role' => 'listener',
            'has_disability' => true,
            'assistance_needed' => 'Intérprete',
            'accredited' => false,
        ]);

        Participant::factory()->create([
            'participant_id' => 'af9b39e2-4bb4-45f1-9057-7c7289176ba8',
            'name' => 'Paulo Saulo',
            'email' => 'paulo@gmail.com',
            'role' => 'speaker',
            'has_disability' => null,
            'assistance_needed' => null,
            'accredited' => null,
        ]);

        Participant::factory()->create([
            'participant_id' => 'd25cbbe9-149f-4dfd-a324-c73e13d14294',
            'name' => 'Carla Soares',
            'email' => 'carla@gmail.com',
            'role' => 'speaker',
            'has_disability' => null,
            'assistance_needed' => null,
            'accredited' => null,
        ]);
    }
}
