<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id")->nullable();
            $table->unsignedInteger("category_id")->nullable();
            $table->Integer("nominal")->default(0);
            $table->text("description")->default("Tidak Ada Keterangan");
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
        Schema::dropIfExists('money');
    }
}
