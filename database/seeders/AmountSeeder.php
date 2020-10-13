<?php

namespace Database\Seeders;

use App\Models\Amount;
use App\Models\Cashbox;
use Illuminate\Database\Seeder;

class AmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cashbox::all()->each(function (Cashbox $cashbox){
            $amounts = [];
            foreach (Amount::VALUES as $value){
                $amounts[] = Amount::factory()->make(['value' => $value]);
            }

            $cashbox->amounts()->saveMany($amounts);
        });
    }
}
