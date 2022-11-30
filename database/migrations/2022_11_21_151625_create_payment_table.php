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
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id_payment');
            $table->integer('id_user');
            $table->string('name_parent', 128);
            $table->string('name_student', 128);
            $table->string('email_payment', 128)->nullable();
            $table->integer('id_kelas');
            $table->string('jenis_pembayaran', 25);
            $table->string('month_payment', 128);
            $table->string('transfer_by', 128);
            $table->string('virtual_account', 128);
            $table->integer('nominal_payment');
            $table->string('phone_number', 25);
            $table->string('picture_payment', 128);
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
        Schema::dropIfExists('payment');
    }
};
