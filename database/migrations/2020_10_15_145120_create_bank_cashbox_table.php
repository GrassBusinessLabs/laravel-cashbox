<?php

use App\Models\Bank;
use App\Models\Cashbox;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankCashboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_cashbox', function (Blueprint $table) {
            $table->primary(['bank_id', 'cashbox_id']);
            $table->foreignIdFor(Bank::class, 'bank_id');
            $table->foreignIdFor(Cashbox::class, 'cashbox_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_cashbox');
    }
}
