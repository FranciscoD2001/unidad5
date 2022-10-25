<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->name = "Francisco";
        $client->phone_number = "6121770000";
        $client->email = "fdiaz_19@alu.uabcs.mx";
        $client->save();

        $client = new Client();
        $client->name = "Alan";
        $client->phone_number = "6121770000";
        $client->email = "Achoy_19@alu.uabcs.mx";
        $client->save();
    }
}
