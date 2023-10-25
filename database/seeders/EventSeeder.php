<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()->create([
            'event_id' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
            'name'=> 'II Seminário de Educação com Inclusão',
        ]);
    }
}
