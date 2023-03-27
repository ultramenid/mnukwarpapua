<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('foto');
            $table->text('deskripsi');
            $table->timestamp('publishdate')->nullable();
            $table->integer('status')->comment('0 = non aktif, 1 = aktif');
            $table->integer('category')->comment('0 = normal, 1 = foto of the day');
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
        Schema::dropIfExists('foto');
    }
};
