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
        $event = new Event();
        $event->name = 'NK Atletiek';
        $event->photo = 'https://picsum.photos/200/300';
        $event->event_start = '2022-06-25';
        $event->event_end = '2022-06-25';
        $event->max_tickets = '999';
        $event->location = 'Breda';
        $event->price = '19.99';
        $event->preorder_price = '15';
        $event->description = 'lorem ipsum';
        $event->save();

        $event = new Event();
        $event->name = 'WK Bodybuilding';
        $event->photo = 'https://picsum.photos/200/300';
        $event->event_start = '2022-06-25';
        $event->event_end = '2022-06-25';
        $event->max_tickets = '999';
        $event->location = 'Helmond';
        $event->price = '19.99';
        $event->preorder_price = '15';
        $event->description = 'lorem ipsum';
        $event->save();
    }
}
