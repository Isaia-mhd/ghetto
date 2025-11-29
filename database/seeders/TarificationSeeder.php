<?php

namespace Database\Seeders;

use App\Models\Tarification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tarifMethods = [
            [
                "label" => "Night",
                "value" => "night"
            ],
            [
                "label" => "Day",
                "value" => "day"
            ],
            [
                "label" => "Month",
                "value" => "month"
            ],
        ];
        foreach ($tarifMethods as $tarif) {
            $exist = Tarification::where("value", $tarif["value"])->exists();
            if(!$exist)
            {
                Tarification::create([
                    "label" => $tarif["label"],
                    "value" => $tarif["value"]
                ]);
            }

        }
    }
}
