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
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id_invoice');
            $table->integer('id_user');
            $table->string('no_invoice', 128);
            $table->string('tgl_bayar', 25);
            $table->integer('nominal_bayar');
            $table->string('note_invoice', 128);
            $table->string('status_invoice', 25);
            $table->string('updated_at', 25);
            $table->string('created_at', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
};
