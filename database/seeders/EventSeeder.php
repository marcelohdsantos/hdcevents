<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            "title" => "Evento de caridade em prol das crianças carentes",
            "description" => "Aqui vai a descrição do evento sobre as crianças carentes",
            "city" => "Manaus",
            "private" => "0"
        ]);
    }
}
