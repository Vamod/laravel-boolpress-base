<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatars', function (Blueprint $table) {
            $table->id();
            $table->string('telefono', 25);
            $table->text('avatar');

            // relazione con la tabella user
            // crea colonna nella tabella
            $table->unsignedBigInteger('user_id');
            // chiave esterna
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade')->onUpdate('cascade');
            // cascade per permettere la cancellazione e l'update
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avatars');
    }
}
