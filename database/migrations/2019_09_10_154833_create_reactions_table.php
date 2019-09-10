<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('reaction_type_id');
            $table->unsignedBigInteger('user_id');
            $table->string('reactionable_type');
            $table->integer('reactionable_id');
            $table->timestamps();

            $table->foreign('reaction_type_id')->references('id')->on('reaction_types');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reactions');
    }
}
