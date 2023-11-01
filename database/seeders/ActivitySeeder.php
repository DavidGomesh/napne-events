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
            'description' => 'Audiodescrição na sala de aula',
            'starts_at' => '2023-12-07 08:00:00',
            'ends_at' => '2023-12-07 12:00:00',
            'hours' => 2,
            'vacancies' => 40,
            'amount_subscriptions' => 0,
            'type' => 'workshop',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => '5b5644dc-352f-401e-9824-fa8351a1ec34',
            'description' => 'Multiplano',
            'starts_at' => '2023-12-07 08:00:00',
            'ends_at' => '2023-12-07 12:00:00',
            'hours' => 2,
            'vacancies' => 40,
            'amount_subscriptions' => 0,
            'type' => 'workshop',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => 'adf7e087-df1f-4c9c-bdf9-d594c845c9be',
            'description' => 'Libras',
            'starts_at' => '2023-12-07 08:00:00',
            'ends_at' => '2023-12-07 12:00:00',
            'hours' => 2,
            'vacancies' => 40,
            'amount_subscriptions' => 0,
            'type' => 'workshop',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => 'afb088a1-601d-4b9f-86b0-cf9ee37bd3a0',
            'description' => 'Desenho Universal de Aprendizagem',
            'starts_at' => '2023-12-07 08:00:00',
            'ends_at' => '2023-12-07 12:00:00',
            'hours' => 2,
            'vacancies' => 40,
            'amount_subscriptions' => 0,
            'type' => 'workshop',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => 'd6f7a6f2-0ea5-4f05-8498-4a4d48050f3a',
            'description' => 'Práticas inclusivas e recursos acessíveis para estudantes com Transtorno do Espectro Autista',
            'starts_at' => '2023-12-07 08:00:00',
            'ends_at' => '2023-12-07 12:00:00',
            'hours' => 2,
            'vacancies' => 40,
            'amount_subscriptions' => 0,
            'type' => 'workshop',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);
        
        Activity::factory()->create([
            'activity_id' => 'ddfc563d-8698-4876-ae74-cb1bc0fd5ec1',
            'description' => 'Metodologia para Desenvolver a Aprendizagem e Incluir',
            'starts_at' => '2023-12-07 08:00:00',
            'ends_at' => '2023-12-07 12:00:00',
            'hours' => 2,
            'vacancies' => 40,
            'amount_subscriptions' => 0,
            'type' => 'workshop',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => '01d5d56e-7384-4166-9d56-08ba19137da8',
            'description' => 'Conferência de Abertura sobre Capacitismo | Prof.ª Helen Vinhote (IFMA/Maracanã)',
            'starts_at' => '2023-12-06 10:00:00',
            'ends_at' => '2023-12-06 11:30:00',
            'hours' => 1.5,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => '052b5415-ae5c-4e21-8054-e742bc7628ed',
            'description' => 'Inclusão Social de Estudantes com Deficiência Intelectual, TEA e TDAH em Sala de Aula do Ensino Médio/Profissional e da Graduação | Prof.ª Dra. Lívia da Conceição Costa Zaquel (UFMA)',
            'starts_at' => '2023-12-06 14:00:00',
            'ends_at' => '2023-12-06 16:00:00',
            'hours' => 2,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => '323f05cd-483d-471f-96b8-6cbc2988aff6',
            'description' => 'Relatos de experiências de Estudantes do IFMA Campus São Luís - Monte Castelo',
            'starts_at' => '2023-12-06 16:30:00',
            'ends_at' => '2023-12-06 18:00:00',
            'hours' => 1.5,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => '79086602-3699-43cb-b860-98c8432dc1c5',
            'description' => 'Mesa redonda: Equidade no contexto escolar: adequações metodológicas | Palestrantes: Prof.ª Ma. Teresa Cristina Lafontaine, Prof.ª Dra.ª Kaciana Nascimento da Silveira Rosa, Prof.ª Ma. Nathalia Rissane Costa Gomes | Mediadora: Prof.ª Regiana Sousa Silva.',
            'starts_at' => '2023-12-07 14:00:00',
            'ends_at' => '2023-12-07 16:00:00',
            'hours' => 2,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);

        Activity::factory()->create([
            'activity_id' => 'b30856ef-e4fe-4dcd-8c7b-f7846d2ed3d1',
            'description' => 'Palestra de encerramento: Adaptação Curricular | Ma. Regina Célia da Silva Reis (IFMA/São Luís-Monte Castelo).',
            'starts_at' => '2023-12-07 16:30:00',
            'ends_at' => '2023-12-07 17:30:00',
            'hours' => 1,
            'type' => 'lecture',
            'event_fk' => '3f53a8e5-8e7a-4eab-b7b4-106adc555500',
        ]);
    }
}
