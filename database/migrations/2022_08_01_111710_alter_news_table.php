<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function(Blueprint $table) {
            $table->dropColumn(['title', 'description']);
            $table->string('title_tm');
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('description_tm');
            $table->text('description_ru');
            $table->text('description_en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->string('title');
        $table->text('description');
        $table->dropColumn(['title_tm', 'title_ru', 'title_en', 'description_tm', 'description_ru', 'description_en']);
    }
}
