<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('razresheniye_no');
            $table->string('gos_prinad');
            $table->string('marka');
            $table->string('gos_nomer');
            $table->string('woditel_fio');
            $table->string('punkt_pog');
            $table->string('punkt_wyg');
            $table->string('marshrut');
            $table->string('gruz');
            $table->string('prinad');
            $table->string('zayawitel');
            $table->string('srok')->default('10 (on) gün');
            $table->string('mesto_wydachi');
            $table->integer('user_id');
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
        Schema::dropIfExists('permissions');
    }
}
