<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voucher_exchanges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_voucher');
            $table->unsignedBigInteger('id_user');
            $table->integer('status');
            $table->dateTime('redeem_voucher');
            $table->timestamps();

            $table->foreign('id_voucher')->references('id')->on('vouchers')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_exchanges');
    }
};
