<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\Cashbox;
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
        Cashbox::factory()
            ->count(10)
            ->create()
            ->each(function (Cashbox $cashbox) {
                $banks = Bank::inRandomOrder()->take(2)->get();
                $cashbox->banks()->attach($banks);
            });
    }
}
