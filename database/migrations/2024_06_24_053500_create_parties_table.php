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
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->enum('party_type', ['vendor', 'client', 'employee'])->nullable();
            $table->string('name', 30)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('address', 50)->nullable();
            $table->string('account_holder', 50)->nullable();
            $table->string('account_number', 50)->nullable();
            $table->string('bank', 100)->nullable();
            $table->string('bank_branch', 100)->nullable();
            $table->string('bank_state', 100)->nullable();
            $table->integer('bank_ifse')->nullable();
            $table->integer('bank_zip')->nullable();
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
        Schema::dropIfExists('parties');
    }
};
