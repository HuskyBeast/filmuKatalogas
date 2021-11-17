<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Characters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id');
            $table->string('name');
            $table->string('real_name');
            $table->string('picture');
            $table->string('role');
            $table->timestamps();
            
            $table->index("film_id");
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropForeign('lists_film_id_foreign');
            $table->dropIndex('lists_film_id_index');
            $table->dropColumn('film_id');
        });
        Schema::dropIfExists('characters');
    }
}
