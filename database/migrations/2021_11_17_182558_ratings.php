<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ratings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('rating');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('film_id');
            $table->timestamps();
            
            $table->index("user_id");
            $table->index("film_id");
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('ratings', function (Blueprint $table) {
            $table->dropForeign('lists_user_id_foreign');
            $table->dropIndex('lists_user_id_index');
            $table->dropColumn('user_id');
            $table->dropForeign('lists_film_id_foreign');
            $table->dropIndex('lists_film_id_index');
            $table->dropColumn('film_id');
        });
        Schema::dropIfExists('ratings');
    }
}
