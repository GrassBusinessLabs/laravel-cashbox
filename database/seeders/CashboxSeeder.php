<?php

namespace Database\Seeders;

use App\Models\Amount;
use App\Models\Cashbox;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CashboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cashbox::factory()->count(10)->create();



        // ->has(
        //     Amount::factory()
        //         ->count(8)
        //         ->state(
        //             new Sequence(
        //                 ...array_map(function ($value) {
        //                     return ['value' => $value];
        //                 }, Amount::VALUES)
        //             )
        //         )
        // )
        // ->create();
    }
}
