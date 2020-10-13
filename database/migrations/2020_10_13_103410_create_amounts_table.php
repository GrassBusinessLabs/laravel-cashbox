<?php

use App\Models\Amount;
use App\Models\Cashbox;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amounts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cashbox::class, 'cashbox_id');
            $table->unsignedInteger('value');
            $table->unsignedInteger('quantity')->nullable();
            $table->unique(['cashbox_id', 'value']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amounts');
    }
}
