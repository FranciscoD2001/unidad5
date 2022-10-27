<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation();
        $reservation->folio = "123";
        $reservation->client_id = 1;
        $reservation->amount = "5000";
        $reservation->arrival_date = "2022-10-26";
        $reservation->departure_date = "2022-10-30";
        $reservation->save();

        $reservation = new Reservation();
        $reservation->folio = "1234";
        $reservation->client_id = 2;
        $reservation->amount = "5000";
        $reservation->arrival_date = "2022-10-26";
        $reservation->departure_date = "2022-10-30";
        $reservation->save();
    }
}
