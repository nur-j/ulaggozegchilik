<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requests', function(Blueprint $table) {
            $table->string('yuztutma')->nullable();
            $table->string('ygtyyarnama')->nullable();
            $table->string('dowlet_sanaw')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requests', function(Blueprint $table) {
            $table->dropColumn(['yuztutma', 'ygtyyarnama', 'dowlet_sanaw']);
        });
    }
}
