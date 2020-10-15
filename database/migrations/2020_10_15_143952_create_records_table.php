<?php

use App\Models\Cashbox;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('value');
            $table->json('detailed_value');
            $table->unsignedInteger('balance_before');
            $table->unsignedInteger('balance_after');
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Cashbox::class, 'cashbox_id');
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
        Schema::dropIfExists('records');
    }
}
