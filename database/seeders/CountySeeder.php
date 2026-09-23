<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\County;

class CountySeeder extends Seeder
{
    const COUNTIES = [
        'Budapest',
        'Pest',
        'Győr-Moson-Sopron',
        'Borsod-Abaúj-Zemplén',
        'Csongrád-Csanád',
    ];

    public function run(): void
    {
        County::truncate();

        foreach (self::COUNTIES as $name) {
            County::create([
                'name' => $name,
            ]);
        }
    }
}
